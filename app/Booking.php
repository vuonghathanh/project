<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function getPriceFormatAttribute(){
        return Utility::formatMoney($this->total_price);
    }

    public function getStatusStringAttribute(){
        if($this->status == -1){
            return '<div class="text-info">Không được duyệt</div>';
        }else if($this->status == 0){
            return '<div class="text-info">Chờ duyệt</div>';
        }else if($this->status == 1){
            return '<div class="text-success">Đã duyệt</div>';
        }else{
            return 'Không được duyệt';
        }
    }

    public function account(){
        return $this->belongsTo('App\Account','account_id','id');
    }

    public function booking_details(){
        return $this->hasMany('App\BookingDetail','booking_id','id');
    }
}
