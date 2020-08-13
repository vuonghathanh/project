<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\FormCreateHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $data['keyword'] = '';
        $data['star'] = 0;
        $hotel_list = Hotel::query();
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $hotel_list = $hotel_list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $hotel_list = $hotel_list->whereBetween('created_at', [$from, $to]);
        }
        if ($request->has('star') && strlen($request->get('star')) != 0) {
            $data['star'] = $request->get('star');
            $hotel_list = $hotel_list->where('star','=',$request->get('star'));
        }
        $data['list'] = $hotel_list
            ->where('status', '=', 1)
            ->orderByDesc('created_at')
            ->paginate(2)->appends($request->only($request->get('keyword')));


        return view('admin/list/list-hotel')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/form/form-hotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCreateHotel $request)
    {
        $request->validated();
        $hotels = new Hotel();
        $hotels->name = $request->get('name');
        $hotels->star = $request->get('star');
        $hotels->address = $request->get('address');
        $hotels->description = $request->get('description');
        $hotels->email = $request->get('email');
        $hotels->main_phone_number = $request->get('phone');
        $hotels->status = 1;
        $hotels->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $hotels->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $hotels->thumbnail .= $thumbnail . ',';
        }
        $hotels->save();
        return redirect('admin/hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = Hotel::find($id);
        return view('admin/list/detail/hotel-detail')->with('list',$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Hotel::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        return view('admin/form/edit/edit-hotel')->with('obj', $obj);
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
        $obj = Hotel::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error/error-404');
        }
        $obj->name = $request->get('name');
        $obj->star = $request->get('star');
        $obj->address = $request->get('address');
        $obj->description = $request->get('description');
        $obj->email = $request->get('email');
        $obj->main_phone_number = $request->get('phone');
        $obj->status = 1;
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/hotels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus($id){
        $obj = Hotel::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        $obj->status = 0;
        $obj->save();
    }

    public function updateAllStatus(Request $request)
    {
        $ids = $request->get('ids');
        Hotel::whereIn('id', $ids)->update(['status' => 0]);
        return redirect('/admin/hotels');
    }
}
