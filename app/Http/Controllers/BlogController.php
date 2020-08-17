<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\FormCreateBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Psr7\str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data = array();
        $data['keyword'] = '';
        $blog_list = Blog::query();
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $blog_list = $blog_list->where('title', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $blog_list = $blog_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $blog_list
            ->where('status', '=', 1)
            ->orderByDesc('created_at')
            ->paginate(5)->appends($request->only($request->get('keyword')));


        return view('admin/list/list-blog')->with($data);

    }

    public function userList(){
        $blogs = Blog::all();
        return view('user/blog')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin/form/form-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCreateBlog $request)
    {
        $request->validated();
        $obj = new Blog();
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->details = $request->get('detail');
        $obj->author = $request->get('author');
        $obj->status = 1;
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function showBlog($id){
        $obj = Blog::orderByRaw("RAND()")->take(4)->get();
        $blog = Blog::find($id);
        return view('user/blog-detail')
            ->with('blog',$blog)
            ->with('obj',$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Blog::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        return view('admin/form/edit/edit-blog')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Blog::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error/error-404');
        }
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->details = $request->get('details');
        $obj->author = $request->get('author');
        $obj->status = 1;
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function updateStatus($id)
    {
        $obj = Blog::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $obj->status = 0;
        $obj->save();
    }

    public function updateAllStatus(Request $request)
    {
        $ids = $request->get('ids');
        Blog::whereIn('id', $ids)->update(['status' => 0]);
        return redirect('/admin/blogs');
    }
}
