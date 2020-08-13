<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    public function booking(){
        return $this->belongsTo('App\Booking','booking_id','id');
    }

    public function room(){
        return $this->belongsTo('App\Room','room_id','id');
    }

    public $timestamps = false;
}
