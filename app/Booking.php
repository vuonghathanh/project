<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function account(){
        return $this->belongsTo('App\Account','account_id','id');
    }

    public function booking_details(){
        return $this->hasMany('App\BookingDetail','booking_id','id');
    }
}
