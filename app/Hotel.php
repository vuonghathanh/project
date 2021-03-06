<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function getPhotoAttribute()
    {
        if ($this->thumbnail != null && strlen($this->thumbnail) > 0) {
            return 'https://res.cloudinary.com/dfrbrguff/image/upload/w_150/' . $this->thumbnail . '.jpg';
        } else {
            return 'https://flcquynhon.com.vn/assets/admin/images/no_image.jpg';
        }
    }

    public function png_rooms(){
        return $this->hasMany(Room::class, 'hotel_id', 'id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room', 'hotel_id', 'id');
    }

    public function bookings(){
        return $this->hasMany('App\Booking','hotel_id','id');
    }

    public function types_room(){
        return $this->hasMany('App\RoomType','hotel_id','id');
    }

    private static $cloudinary_link = 'https://res.cloudinary.com/dfrbrguff/image/upload/';

    public function getSmallPhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $photo = explode(',', $this->thumbnail);
        return self::$cloudinary_link . 'w_100,c_scale' . $photo[0] . '.jpg';
    }

    public function getLargePhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $photo = explode(',', $this->thumbnail);
        return self::$cloudinary_link . $photo[0] . '.jpg';
    }

    public function getSmallPhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'w_100,scale/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getLargePhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPreviewPhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'c_limit,h_60,w_90/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPhotoIdsAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_ids = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_ids, $p);
            }
        }
        return $list_ids;
    }
}
