<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoAccount  = Session::get('infoAccount');
        $bookingCart = Session::get('bookingCart');
        return view('user/booking')
            ->with('bookingCart', $bookingCart)
            ->with('infoAccount',$infoAccount);
    }

    public function remove(Request $request){
        $roomId = $request->get('roomId');
        $bookingCart = \Illuminate\Support\Facades\Session::get('bookingCart');
        if ($bookingCart != null){
            if (array_key_exists($roomId,$bookingCart)){
                unset($bookingCart[$roomId]);
            }
        }
        Session::put('bookingCart',$bookingCart);
    }

    public function submitBooking(Request $request){
        $bookingCart = Session::get('bookingCart');
        if ($bookingCart == null){
            $bookingCart = array();
        }
        $booking = new Booking();
        $booking->total_price = $request->get('total_price');
        $booking->payment_type = 'paypal';
        $booking->status = 0;
        $booking->account_id = 1;
        $booking->first_name = $request->get('first_name');
        $booking->last_name = $request->get('last_name');
        $booking->email = $request->get('email');
        $booking->created_at = Carbon::now()->addDays(0)->format('Y-m-d H:i:s');
        $booking->updated_at = Carbon::now()->addDays(0)->format('Y-m-d H:i:s');

        $bookingDetails= array();
        foreach ($bookingCart as $key => $roomBooked){
            $bookingDetail = new BookingDetail();
            $bookingDetail->price = $roomBooked['roomPrice'];
            $bookingDetail->date_number = $roomBooked['dateNumber'];
            $bookingDetail->start_with = $roomBooked['startTime'];
            $bookingDetail->end_with = $roomBooked['endTime'];
            $bookingDetail->room_id = $roomBooked['roomId'];
            array_push($bookingDetails,$bookingDetail);
        }
        DB::transaction(function () use ($booking,$bookingDetails){
            $booking->save();
            foreach ($bookingDetails as $bookingDetail){
                $bookingDetail->booking_id = $booking->id;
                $bookingDetail->save();
            }
        });
        Session::remove('bookingCart');
        return 'Good job';
    }

    public function change(){
        Session::remove('bookingCart');
        return redirect('/hotels');
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
        //
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
}
