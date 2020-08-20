<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingDetail;
use App\Hotel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $data['hotel_id'] = 0;
        $hotels = Hotel::all();
        $booking_list = Booking::query();
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $booking_list = $booking_list->whereBetween('created_at', [$from, $to]);
        }
        if ($request->has('hotel_id') && $request->get('hotel_id') != 0){
            $data['hotel_id'] = $request->get('hotel_id');
            $booking_list = $booking_list->where('hotel_id','=',$request->get('hotel_id'));
        }
        $data['list'] = $booking_list
            ->orderByDesc('created_at')
            ->paginate(10)->appends($request->only($request->get('keyword')));
        $data['hotels'] = $hotels;
        return view('admin/list/list-booking')->with($data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = Booking::find($id)->booking_details;
        return view('admin/list/detail/booking-detail')->with('list',$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function bookingDetails(){
        $list = BookingDetail::paginate(10);
        return view('admin/list/list-booking-detail')->with('list',$list);
    }

    public function confirm($id){
        $obj = Booking::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        $obj->status = 1;
        $obj->save();
    }

    public function cancel($id){
        $obj = Booking::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        if ($obj->status == 1){
            return ;
        }else{
            $obj->status = -1;
        }
        $obj->save();
    }
}
