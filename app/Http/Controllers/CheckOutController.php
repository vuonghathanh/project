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
        $bookingCart = Session::get('bookingCart');
        return view('user/booking')
            ->with('bookingCart', $bookingCart);
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
        $booking->hotel_id = Session::get('hotelId');
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
        Session::put('bookingId',$booking->id);
        return redirect('/payment');
    }

    public function checkOut(){
        $booking = Booking::find(Session::get('bookingId'));
        if($booking == null){
            return view('error/error-404');
        }
        return view('user/payment')->with('booking',$booking);
    }

    public function change(){
        Session::remove('bookingCart');
        return redirect('/hotels');
    }
}
