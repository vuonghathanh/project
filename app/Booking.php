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
            return '<div class="text-info">Đặt phòng thất bại</div>';
        }else if($this->status == 0){
            return '<div class="text-info">Chờ duyệt</div>';
        }else if($this->status == 1){
            return '<div class="text-success">Đặt phòng thành công</div>';
        }else{
            return 'Không được duyệt';
        }
    }

    public function hotel(){
        return $this->belongsTo('App\Hotel','hotel_id','id');
    }

    public function account(){
        return $this->belongsTo('App\Account','account_id','id');
    }

    public function booking_details(){
        return $this->hasMany('App\BookingDetail','booking_id','id');
    }
}
