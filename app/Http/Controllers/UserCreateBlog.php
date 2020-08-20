<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\FormCreateBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserCreateBlog extends Controller
{
    public function userCreate(){
        return view('user/create-blog');
    }

    public function userStore(FormCreateBlog $request)
    {
        $request->validated();
        $obj = new Blog();
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->details = $request->get('detail');
        $obj->author = $request->get('author');
        $obj->status = 0;
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/create-success');
    }
}
