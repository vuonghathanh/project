<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function bookings(){
        return $this->hasMany('App\Booking','account_id','id');
    }
}
