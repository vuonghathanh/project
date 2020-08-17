<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\FormCreateRoom;
use App\Room;
use App\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use MongoDB\BSON\Type;

class RoomController extends Controller
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
        $data['hotel_id'] = 0;
        $data['type_id'] = 0;
        $hotels = Hotel::all();
        $types = RoomType::where('hotel_id','=',$request->get('hotel_id'))->get();
        $list_rooms = Room::query();
        if($request->has('keyword') && strlen($request->get('keyword')) >0 ){
            $data['keyword']= $request->get('keyword');
            $list_rooms = $list_rooms->where('floor', '=',  $request->get('keyword'));
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $list_rooms = $list_rooms->whereBetween('created_at', [$from, $to]);
        }
        if ($request->has('hotel_id') && $request->get('hotel_id') != 0){
            $data['hotel_id'] =$request->get('hotel_id');
            $list_rooms = $list_rooms->where('hotel_id','=',$request->get('hotel_id'));
        }
        if ($request->has('type_id') && $request->get('type_id') != 0){
            $data['type_id'] = $request->get('type_id');
            $list_rooms = $list_rooms->where('room_type','=',$request->get('type_id'));
        }

        $data['list'] = $list_rooms
            ->where('status', '=', 1)
            ->whereHas('hotel', function ($q) {
                $q->where('status',1);
            })
            ->orderByDesc('created_at')
            ->paginate(10)->appends($request->only($request->get('keyword')));

        $data['hotels'] = $hotels;
        $data['types'] = $types;
        return view('admin/list/list-room')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        $types = RoomType::all();
        return view('admin/form/form-room')
            ->with('hotels',$hotels)
            ->with('types',$types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCreateRoom $request)
    {
        $request->validated();
        $obj = new Room();
        $obj->room_number = $request->get('room_number');
        $obj->floor = $request->get('floor');
        $obj->price = $request->get('price');
        $obj->description = $request->get('description');
        $obj->status = 1;
        $obj->number_people  = $request->get('number_people');
        $obj->hotel_id = $request->get('hotel');
        $obj->room_type = $request->get('room_type');

        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Room::find($id);
        return view('admin/form/edit/edit-room')->with('obj',$obj);
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
        $obj = Room::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error/error-404');
        }
        $obj->room_number = $request->get('room_number');
        $obj->floor = $request->get('floor');
        $obj->hotel_id = $request->get('hotel');
        $obj->room_type = $request->get('room_type');
        $obj->price = $request->get('price');
        $obj->number_people = $request->get('number_people');
        $obj->description = $request->get('description');
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/rooms');
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
        $obj = Room::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        $obj->status = 0;
        $obj->save();
    }

    public function updateAllStatus(Request $request)
    {
        $ids = $request->get('ids');
        Room::whereIn('id', $ids)->update(['status' => 0]);
        return redirect('/admin/rooms');
    }

    public function getRoomTypeByHotelId(Request $request){
        $hotel = Hotel::find($request->get('hotelId'));
        if($hotel == null){
           return response()->json('Hotel is not found or has been deleted!', 404);
        }
        return $hotel->types_room;
    }
}
