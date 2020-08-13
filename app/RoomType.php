<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public function rooms_type()
    {
        return $this->hasMany('App\Room', 'room_type', 'id');
    }

    public function hotel(){
        return $this->belongsTo('App\Hotel','hotel_id','id');
    }
}
