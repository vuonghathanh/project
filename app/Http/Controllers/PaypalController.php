<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Paypal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaypalController extends Controller
{

    public function checkPaypal()
    {
        $ipn = new Paypal();

// Use the sandbox endpoint during testing.
        $ipn->useSandbox();
        $verified = $ipn->verifyIPN();
        if ($verified) {
            $booking = Booking::find(Session::get('bookingId'));
            $booking->status = 1 ;
            $booking->save();
        }

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
        header("HTTP/1.1 200 OK");
    }
}
