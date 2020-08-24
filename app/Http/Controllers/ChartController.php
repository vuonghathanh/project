<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Charts\ChartBooking;
use App\Hotel;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class ChartController extends Controller
{
    public function index(Request $request){
        $data = array();
        $data['hotel_id'] = 0;
        $total_price = 0;
        $hotels = Hotel::all();
        $booking = Booking::query();
        if ($request->has('hotel_id') && $request->get('hotel_id') != 0){
            $data['hotel_id'] = $request->get('hotel_id');
            $booking = $booking->where('hotel_id','=',$request->get('hotel_id'));
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0){
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $booking = $booking->whereBetween('created_at', [$from, $to]);
        }

        $pluckBooking = $booking->where('status','=',1)
            ->orderByRaw('created_at')
            ->pluck('created_at','total_price');
        $chart = new ChartBooking();
        foreach ($pluckBooking->keys() as $price){
            $total_price += $price;
        }
        $chart->labels($pluckBooking->values());
        $chart->dataset('My dataset 1', 'line', $pluckBooking->keys());

        $data['chart'] = $chart;
        $data['hotels'] = $hotels;
        $data['total_price'] = $total_price;
        return view('admin/chart-js')->with($data);

    }
}
