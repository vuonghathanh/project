<?php

namespace App\Http\Controllers;

use App\Paypal;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function list(){
//        $list = Paypal::all();
        return view('paypal/paypal-return')/*->with('list',$list)*/;
    }
}
