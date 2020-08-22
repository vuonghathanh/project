<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Charts\ChartBooking;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class ChartController extends Controller
{
    public function index(){
        //explot
        $total_price = 0;
        $booking = Booking::query()->where([['hotel_id','=',1],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking = $booking->pluck('created_at','total_price');
        $chart = new ChartBooking();
        foreach ($pluckBooking->keys() as $price){
            $total_price += $price;
        }
        $chart->labels($pluckBooking->values());
        $chart->dataset('My dataset 1', 'line', $pluckBooking->keys());


        $booking2 = Booking::query()->where([['hotel_id','=',2],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking2 = $booking2->pluck('created_at','total_price');
        $chart2 = new ChartBooking();
        $total_price2 = 0;
        foreach ($pluckBooking2->keys() as $price){
            $total_price2 += $price;
        }
        $chart2->labels($pluckBooking2->values());
        $chart2->dataset('My dataset 1', 'line', $pluckBooking2->keys());

        $booking3 = Booking::query()->where([['hotel_id','=',3],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking3 = $booking3->pluck('created_at','total_price');
        $chart3 = new ChartBooking();
        $total_price3 = 0;
        foreach ($pluckBooking3->keys() as $price){
            $total_price3 += $price;
        }
        $chart3->labels($pluckBooking3->values());
        $chart3->dataset('My dataset 1', 'line', $pluckBooking3->keys());

        $booking4 = Booking::query()->where([['hotel_id','=',4],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking4 = $booking4->pluck('created_at','total_price');
        $chart4 = new ChartBooking();
        $total_price4 = 0;
        foreach ($pluckBooking4->keys() as $price){
            $total_price4 += $price;
        }
        $chart4->labels($pluckBooking4->values());
        $chart4->dataset('My dataset 1', 'line', $pluckBooking4->keys());

        $booking5 = Booking::query()->where([['hotel_id','=',5],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking5 = $booking5->pluck('created_at','total_price');
        $chart5 = new ChartBooking();
        $total_price5 = 0;
        foreach ($pluckBooking5->keys() as $price){
            $total_price5 += $price;
        }
        $chart5->labels($pluckBooking5->values());
        $chart5->dataset('My dataset 1', 'line', $pluckBooking5->keys());

        $booking6 = Booking::query()->where([['hotel_id','=',6],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking6 = $booking6->pluck('created_at','total_price');
        $chart6 = new ChartBooking();
        $total_price6 = 0;
        foreach ($pluckBooking6->keys() as $price){
            $total_price6 += $price;
        }
        $chart6->labels($pluckBooking6->values());
        $chart6->dataset('My dataset 1', 'line', $pluckBooking6->keys());

        $booking7 = Booking::query()->where([['hotel_id','=',7],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking7 = $booking7->pluck('created_at','total_price');
        $chart7 = new ChartBooking();
        $total_price7 = 0;
        foreach ($pluckBooking7->keys() as $price){
            $total_price7 += $price;
        }
        $chart7->labels($pluckBooking7->values());
        $chart7->dataset('My dataset 1', 'line', $pluckBooking7->keys());

        $booking8 = Booking::query()->where([['hotel_id','=',8],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking8 = $booking8->pluck('created_at','total_price');
        $chart8 = new ChartBooking();
        $total_price8 = 0;
        foreach ($pluckBooking8->keys() as $price){
            $total_price8 += $price;
        }
        $chart8->labels($pluckBooking8->values());
        $chart8->dataset('My dataset 1', 'line', $pluckBooking8->keys());

        $booking9 = Booking::query()->where([['hotel_id','=',9],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking9 = $booking9->pluck('created_at','total_price');
        $chart9 = new ChartBooking();
        $total_price9 = 0;
        foreach ($pluckBooking9->keys() as $price){
            $total_price9 += $price;
        }
        $chart9->labels($pluckBooking9->values());
        $chart9->dataset('My dataset 1', 'line', $pluckBooking9->keys());

        $booking10 = Booking::query()->where([['hotel_id','=',10],['status','=',1]])->orderByRaw('created_at')->get();
        $pluckBooking10 = $booking10->pluck('created_at','total_price');
        $chart10 = new ChartBooking();
        $total_price10 = 0;
        foreach ($pluckBooking10->keys() as $price){
            $total_price10 += $price;
        }
        $chart10->labels($pluckBooking10->values());
        $chart10->dataset('My dataset 1', 'line', $pluckBooking10   ->keys());

        return view('admin/chart-js')
            ->with('chart',$chart)
            ->with('total_price',$total_price)
            ->with('chart2',$chart2)
            ->with('total_price2',$total_price2)
            ->with('chart3',$chart3)
            ->with('total_price3',$total_price3)
            ->with('chart4',$chart4)
            ->with('total_price4',$total_price4)
            ->with('chart5',$chart5)
            ->with('total_price5',$total_price5)
            ->with('chart6',$chart6)
            ->with('total_price6',$total_price6)
            ->with('chart7',$chart7)
            ->with('total_price7',$total_price7)
            ->with('chart8',$chart8)
            ->with('total_price8',$total_price8)
            ->with('chart9',$chart9)
            ->with('total_price9',$total_price9)
            ->with('chart10',$chart10)
            ->with('total_price10',$total_price10);

    }
}
