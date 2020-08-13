<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\FormCreateRoomType;
use App\Room;
use App\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = RoomType::where('status','=',1)->paginate(10);
        return view('admin/list/list-room-type')->with('list',$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin/form/form-room-type')->with('hotels',$hotels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCreateRoomType $request)
    {
        $request->validated();
        $obj = new RoomType();
        $obj->type = $request->get('type');
        $obj->hotel_id = $request->get('hotel');
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/room-types');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = RoomType::find($id)->rooms_type;
        return view('admin/list/detail/room_type')->with('list',$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = RoomType::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        return view('admin/form/edit/edit-room-type')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = RoomType::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $obj->type = $request->get('type');
        $obj->hotel_id = $request->get('type');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/room-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function updateStatus($id){
        $obj = RoomType::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        $obj->status = 0;
        $obj->save();
    }

    public function updateAllStatus(Request $request)
    {
        $ids = $request->get('ids');
        RoomType::whereIn('id', $ids)->update(['status' => 0]);
        return redirect('/admin/room-types');
    }
}
