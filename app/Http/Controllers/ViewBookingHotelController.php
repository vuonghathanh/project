<?php

namespace App\Http\Controllers;

use App\BookingDetail;
use App\Hotel;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Array_;

class ViewBookingHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $hotels = Hotel::all();
        $rooms = Room::query();
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end'))) {
            $start = $request->get('start');
            $end = $request->get('end');
            Session::put('start',$start);
            Session::put('end',$end);
            Session::put('number_people',$request->get('number_people'));
            $rooms = $rooms
                ->whereNotIn('id',
                    BookingDetail::select('room_id')
                    ->where(function ($query) use ($start,$end){
                        $query->where([
                            ['start_with','<',$start],
                            ['end_with','<',$start]
                        ])->orWhere([
                            ['start_with','>',$start],
                            ['end_with','>',$end]
                        ]);

                    }))
                ->where('number_people','=',$request->get('number_people'))
                ->paginate(7)->appends($request->only($request->get('keyword')));
        }else{
            $rooms = null;
        }
        $data['hotels'] = $hotels;
        $data['rooms'] = $rooms;
        return view('user/booking-hotel')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $data = array();
        $hotel = Hotel::find($id);
        $rooms = Hotel::query();
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end'))) {
            $start = $request->get('start');
            $end = $request->get('end');
            Session::put('start',$start);
            Session::put('end',$end);
            Session::put('number_people',$request->get('number_people'));
            $rooms = $rooms
                ->find($id)
                ->png_rooms()
                ->whereNotIn('id', BookingDetail::select('room_id')
                    ->where(function ($query) use ($start,$end){
                    $query->where([
                        ['start_with','<',$start],
                        ['end_with','<',$start]
                    ])->orWhere([
                        ['start_with','>',$start],
                        ['end_with','>',$end]
                    ]);

                }))->where('number_people','=',$request->get('number_people'))
                ->paginate(7)->appends($request->only($request->get('keyword')));

        }else{
            $rooms = $rooms->find($id)->png_rooms()->paginate(7)->appends($request->only($request->get('keyword')));
        }
        $data['hotel'] = $hotel;
        $data['rooms'] = $rooms;


        return view('user/detail-hotel')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function showView($id, Request $request)
    {
        $room = Room::find($id);

        return view('user/detail-room')
            ->with('room', $room);
    }

    public function addCart(Request $request)
    {
        $roomId = $request->get('roomId');
        $startTime = $request->get('startTime');
        $endTime = $request->get('endTime');
        $dateNumber = $request->get('dateNumber');
        $room = Room::find($roomId);
        if ($room == null) {
            return view('error/error-404');
        }

        $bookingCart = Session::get('bookingCart');
        if ($bookingCart == null) {

            $bookingCart = array();
        }
        $bookingRoom = null;
        if (array_key_exists($room->id, $bookingCart)) {
            $bookingRoom = $bookingCart[$room->id];
        }
        if ($bookingRoom == null) {
            $bookingRoom = array(
                'roomId' => $room->id,
                'hotelName' => $room->hotel->name,
                'hotelId' => $room->hotel->id,
                'hotelStar' => $room->hotel->star,
                'hotelAddress' => $room->hotel->address,
                'hotelPhoto' => $room->hotel->large_photo,
                'roomType' => $room->type->type,
                'startTime' => $startTime,
                'endTime' => $endTime,
                'dateNumber' => $dateNumber,
                'roomPrice' => $room->price
            );
        } else {
            return;
        }
        $bookingCart[$room->id] = $bookingRoom;
        Session::put('hotelId',$room->hotel->id);
        Session::put('bookingCart', $bookingCart);
    }

}
