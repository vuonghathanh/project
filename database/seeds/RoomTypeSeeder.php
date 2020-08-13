<?php

use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//Có thể xóa các bản ghi có quan hệ khóa chính - phụ
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        \Illuminate\Support\Facades\DB::table('room_types') ->truncate();
        \Illuminate\Support\Facades\DB::table('room_types') ->insert([
            [
                'id' => 1,
                'type' => 'VIP',
                'hotel_id' => 1,
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'hotel_id' => 1,
                'status' => 1,
                'type' => 'MEDIUM',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'hotel_id' => 1,
                'status' => 1,
                'type' => 'PRESIDENT',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 4,
                'hotel_id' => 1,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 5,
                'type' => 'VIP',
                'hotel_id' => 2,
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'hotel_id' => 2,
                'type' => 'MEDIUM',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 7,
                'hotel_id' => 2,
                'type' => 'PRESIDENT',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 8,
                'hotel_id' => 2,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 9,
                'hotel_id' => 3,
                'status' => 1,
                'type' => 'VIP',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 10,
                'hotel_id' => 3,
                'status' => 1,
                'type' => 'MEDIUM',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 11,
                'hotel_id' => 3,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 12,
                'hotel_id' => 4,
                'status' => 1,
                'type' => 'VIP',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 13,
                'hotel_id' => 4,
                'status' => 1,
                'type' => 'MEDIUM',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 14,
                'hotel_id' => 4,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 15,
                'hotel_id' => 5,
                'status' => 1,
                'type' => 'VIP',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 16,
                'hotel_id' => 5,
                'status' => 1,
                'type' => 'MEDIUM',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 17,
                'hotel_id' => 5,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 18,
                'hotel_id' => 6,
                'status' => 1,
                'type' => 'VIP',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 19,
                'hotel_id' => 6,
                'type' => 'MEDIUM',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 20,
                'hotel_id' => 6,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 21,
                'hotel_id' => 7,
                'status' => 1,
                'type' => 'VIP',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 22,
                'hotel_id' => 7,
                'type' => 'MEDIUM',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 23,
                'hotel_id' => 7,
                'type' => 'AFFORDABLE',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 24,
                'hotel_id' => 8,
                'type' => 'VIP',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 25,
                'hotel_id' => 8,
                'status' => 1,
                'type' => 'MEDIUM',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 26,
                'hotel_id' => 8,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 27,
                'hotel_id' => 9,
                'status' => 1,
                'type' => 'VIP',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 28,
                'hotel_id' => 9,
                'status' => 1,
                'type' => 'MEDIUM',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 29,
                'hotel_id' => 9,
                'status' => 1,
                'type' => 'AFFORDABLE',
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 30,
                'hotel_id' => 10,
                'type' => 'VIP',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 31,
                'hotel_id' => 10,
                'type' => 'MEDIUM',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],[
                'id' => 32,
                'hotel_id' => 10,
                'type' => 'AFFORDABLE',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ]
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
