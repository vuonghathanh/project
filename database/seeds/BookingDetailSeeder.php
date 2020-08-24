<?php

use Illuminate\Database\Seeder;

class BookingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        \Illuminate\Support\Facades\DB::table('booking_details')->truncate();
        \Illuminate\Support\Facades\DB::table('booking_details')->insert([
            [
                'id' => 1,
                'booking_id' => 1,
                'room_id' => 1,
                'price' => 6060000,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 8, 12)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 14)->toDateTimeString(),


            ], [
                'id' => 2,
                'booking_id' => 2,
                'room_id' => 2,
                'price' => 6060000,
                'date_number' => 3,
                'start_with' => \Carbon\Carbon::create(2020, 8, 15)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 18)->toDateTimeString(),


            ], [
                'id' => 3,
                'booking_id' => 3,
                'room_id' => 3,
                'price' => 6060000,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 8, 20)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 22)->toDateTimeString(),


            ], [
                'id' => 4,
                'booking_id' => 4,
                'room_id' => 4,
                'price' => 6555000,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 8, 24)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 29)->toDateTimeString(),


            ], [
                'id' => 5,
                'booking_id' => 5,
                'room_id' => 5,
                'price' => 6555000,
                'date_number' => 3,
                'start_with' => \Carbon\Carbon::create(2020, 8, 30)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 2)->toDateTimeString(),


            ], [
                'id' => 6,
                'booking_id' => 6,
                'room_id' => 6,
                'price' => 7072500,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 4)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 5)->toDateTimeString(),


            ], [
                'id' => 7,
                'booking_id' => 7,
                'room_id' => 7,
                'price' => 7072500,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 6)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 8)->toDateTimeString(),


            ], [
                'id' => 8,
                'booking_id' => 8,
                'room_id' => 8,
                'price' => 8085000,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 9)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 11)->toDateTimeString(),


            ], [
                'id' => 9,
                'booking_id' => 9,
                'room_id' => 9,
                'price' => 8085000,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 12)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 13)->toDateTimeString(),


            ], [
                'id' => 10,
                'booking_id' => 10,
                'room_id' => 10,
                'price' => 8106958,
                'date_number' => 4,
                'start_with' => \Carbon\Carbon::create(2020, 9, 14)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 18)->toDateTimeString(),


            ], [
                'id' => 11,
                'booking_id' => 11,
                'room_id' => 11,
                'price' => 8106958,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 19)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 20)->toDateTimeString(),


            ], [
                'id' => 12,
                'booking_id' => 12,
                'room_id' => 12,
                'price' => 10110000,
                'date_number' => 4,
                'start_with' => \Carbon\Carbon::create(2020, 9, 21)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 25)->toDateTimeString(),


            ], [
                'id' => 13,
                'booking_id' => 13,
                'room_id' => 13,
                'price' => 11144589,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 26)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 27)->toDateTimeString(),


            ], [
                'id' => 14,
                'booking_id' => 14,
                'room_id' => 14,
                'price' => 21426380,
                'date_number' => 3,
                'start_with' => \Carbon\Carbon::create(2020, 9, 27)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 30)->toDateTimeString(),


            ], [
                'id' => 15,
                'booking_id' => 15,
                'room_id' => 15,
                'price' => 38505000,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 1)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 2)->toDateTimeString(),


            ], [
                'id' => 16,
                'booking_id' => 16,
                'room_id' => 16,
                'price' => 69186000,
                'date_number' => 7,
                'start_with' => \Carbon\Carbon::create(2020, 8, 3)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020,8, 10)->toDateTimeString(),


            ], [
                'id' => 17,
                'booking_id' => 17,
                'room_id' => 17,
                'price' => 69186000,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 12)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 13)->toDateTimeString(),


            ], [
                'id' => 18,
                'booking_id' => 18,
                'room_id' => 18,
                'price' => 6636254,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 8, 14)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 19)->toDateTimeString(),


            ], [
                'id' => 19,
                'booking_id' => 19,
                'room_id' => 19,
                'price' => 5850395,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 20)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 21)->toDateTimeString(),


            ], [
                'id' => 20,
                'booking_id' => 20,
                'room_id' => 20,
                'price' => 3954978,
                'date_number' => 3,
                'start_with' => \Carbon\Carbon::create(2020, 9, 22)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 25)->toDateTimeString(),


            ], [
                'id' => 21,
                'booking_id' => 21,
                'room_id' => 21,
                'price' => 607275,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 9, 25)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 30)->toDateTimeString(),


            ], [
                'id' => 22,
                'booking_id' => 22,
                'room_id' => 22,
                'price' => 692539,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 2)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 3)->toDateTimeString(),


            ], [
                'id' => 23,
                'booking_id' => 23,
                'room_id' => 23,
                'price' => 915584,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020,9, 4)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 9)->toDateTimeString(),


            ], [
                'id' => 24,
                'booking_id' => 24,
                'room_id' => 24,
                'price' => 1090909,
                'date_number' => 10,
                'start_with' => \Carbon\Carbon::create(2020, 8, 10)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 20)->toDateTimeString(),


            ], [
                'id' => 25,
                'booking_id' => 25,
                'room_id' => 25,
                'price' => 1146544,
                'date_number' => 10,
                'start_with' => \Carbon\Carbon::create(2020, 8, 20)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020,8, 30)->toDateTimeString(),


            ], [
                'id' => 26,
                'booking_id' => 26,
                'room_id' => 26,
                'price' => 1186665,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 1)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 2)->toDateTimeString(),


            ], [
                'id' => 27,
                'booking_id' => 27,
                'room_id' => 27,
                'price' => 1237013,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 3)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 5)->toDateTimeString(),


            ], [
                'id' => 28,
                'booking_id' => 28,
                'room_id' => 28,
                'price' => 1133166,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 9, 6)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 11)->toDateTimeString(),


            ], [
                'id' => 29,
                'booking_id' => 29,
                'room_id' => 29,
                'price' => 1133166,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 9, 12)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 17)->toDateTimeString(),


            ], [
                'id' => 30,
                'booking_id' => 30,
                'room_id' => 30,
                'price' => 1605959,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 8, 18)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 23)->toDateTimeString(),


            ], [
                'id' => 31,
                'booking_id' => 31,
                'room_id' => 31,
                'price' => 1838175,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 8, 24)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 25)->toDateTimeString(),


            ], [
                'id' => 32,
                'booking_id' => 32,
                'room_id' => 32,
                'price' => 1838175,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 8, 25)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 30)->toDateTimeString(),


            ], [
                'id' => 33,
                'booking_id' => 33,
                'room_id' => 118,
                'price' => 2964800,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 9, 2)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 7)->toDateTimeString(),


            ], [
                'id' => 34,
                'booking_id' => 34,
                'room_id' => 34,
                'price' => 1959460,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 8)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 10)->toDateTimeString(),


            ], [
                'id' => 35,
                'booking_id' => 35,
                'room_id' => 35,
                'price' => 2026159,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 9, 11)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 16)->toDateTimeString(),


            ], [
                'id' => 36,
                'booking_id' => 36,
                'room_id' => 36,
                'price' => 2026159,
                'date_number' => 3,
                'start_with' => \Carbon\Carbon::create(2020, 8, 17)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 20)->toDateTimeString(),


            ], [
                'id' => 37,
                'booking_id' => 37,
                'room_id' => 37,
                'price' => 2159960,
                'date_number' => 9,
                'start_with' => \Carbon\Carbon::create(2020, 8, 21)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 30)->toDateTimeString(),


            ], [
                'id' => 38,
                'booking_id' => 38,
                'room_id' => 38,
                'price' => 2159960,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 2)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 4)->toDateTimeString(),


            ], [
                'id' => 39,
                'booking_id' => 39,
                'room_id' => 39,
                'price' => 12017316,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 5)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 7)->toDateTimeString(),


            ], [
                'id' => 40,
                'booking_id' => 40,
                'room_id' => 40,
                'price' => 11144589,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 8)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 9)->toDateTimeString(),


            ], [
                'id' => 41,
                'booking_id' => 41,
                'room_id' => 41,
                'price' => 8421573,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 8, 10)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 15)->toDateTimeString(),


            ], [
                'id' => 42,
                'booking_id' => 42,
                'room_id' => 42,
                'price' => 7697950,
                'date_number' => 4,
                'start_with' => \Carbon\Carbon::create(2020, 9, 16)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 20)->toDateTimeString(),


            ], [
                'id' => 43,
                'booking_id' => 43,
                'room_id' => 43,
                'price' => 6636254,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 21)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 22)->toDateTimeString(),


            ], [
                'id' => 44,
                'booking_id' => 44,
                'room_id' => 44,
                'price' => 5850395,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 9, 24)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 29)->toDateTimeString(),


            ], [
                'id' => 45,
                'booking_id' => 45,
                'room_id' => 99,
                'price' => 12017316,
                'date_number' => 4,
                'start_with' => \Carbon\Carbon::create(2020, 9, 1)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 5)->toDateTimeString(),


            ], [
                'id' => 46,
                'booking_id' => 46,
                'room_id' => 46,
                'price' => 5213060,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 6)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 7)->toDateTimeString(),


            ], [
                'id' => 47,
                'booking_id' => 47,
                'room_id' => 47,
                'price' => 5234636,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 8)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 9)->toDateTimeString(),


            ], [
                'id' => 48,
                'booking_id' => 48,
                'room_id' => 48,
                'price' => 6371540,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 10)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 12)->toDateTimeString(),


            ], [
                'id' => 49,
                'booking_id' => 49,
                'room_id' => 49,
                'price' => 6397912,
                'date_number' => 5,
                'start_with' => \Carbon\Carbon::create(2020, 9, 13)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 18)->toDateTimeString(),


            ], [
                'id' => 50,
                'booking_id' => 50,
                'room_id' => 50,
                'price' => 1901600,
                'date_number' => 4,
                'start_with' => \Carbon\Carbon::create(2020, 9, 1)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 5)->toDateTimeString(),


            ], [
                'id' => 51,
                'booking_id' => 51,
                'room_id' => 51,
                'price' => 1901600,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 6)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 8)->toDateTimeString(),


            ], [
                'id' => 52,
                'booking_id' => 52,
                'room_id' => 87,
                'price' => 2833600,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 9)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 10)->toDateTimeString(),


            ], [
                'id' => 53,
                'booking_id' => 53,
                'room_id' => 53,
                'price' => 2032800,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 8, 10)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 12)->toDateTimeString(),


            ], [
                'id' => 54,
                'booking_id' => 54,
                'room_id' => 54,
                'price' => 2224887,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 12)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 14)->toDateTimeString(),


            ], [
                'id' => 55,
                'booking_id' => 55,
                'room_id' => 55,
                'price' => 2703119,
                'date_number' => 3,
                'start_with' => \Carbon\Carbon::create(2020, 9, 14)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 17)->toDateTimeString(),


            ], [
                'id' => 56,
                'booking_id' => 56,
                'room_id' => 72,
                'price' => 10110000,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 17)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 18)->toDateTimeString(),


            ], [
                'id' => 57,
                'booking_id' => 57,
                'room_id' => 57,
                'price' => 2833600,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 8, 18)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 20)->toDateTimeString(),


            ], [
                'id' => 58,
                'booking_id' => 58,
                'room_id' => 58,
                'price' => 2964800,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 8, 20)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 21)->toDateTimeString(),


            ], [
                'id' => 59,
                'booking_id' => 59,
                'room_id' => 59,
                'price' => 3156887,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 8, 21)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 22)->toDateTimeString(),


            ], [
                'id' => 60,
                'booking_id' => 60,
                'room_id' => 60,
                'price' => 3534277,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 8, 23)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 25)->toDateTimeString(),


            ], [
                'id' => 61,
                'booking_id' => 61,
                'room_id' => 61,
                'price' => 607275,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 8, 25)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 26)->toDateTimeString(),


            ], [
                'id' => 62,
                'booking_id' => 62,
                'room_id' => 62,
                'price' => 692539,
                'date_number' => 6,
                'start_with' => \Carbon\Carbon::create(2020,8, 26)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 1)->toDateTimeString(),


            ], [
                'id' => 63,
                'booking_id' => 63,
                'room_id' => 63,
                'price' => 915584,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 2)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 4)->toDateTimeString(),


            ], [
                'id' => 64,
                'booking_id' => 64,
                'room_id' => 64,
                'price' => 1090909,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 5)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 6)->toDateTimeString(),


            ], [
                'id' => 65,
                'booking_id' => 65,
                'room_id' => 65,
                'price' => 1146544,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 7)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 9)->toDateTimeString(),


            ], [
                'id' => 66,
                'booking_id' => 66,
                'room_id' => 66,
                'price' => 1186665,
                'date_number' => 2,
                'start_with' => \Carbon\Carbon::create(2020, 9, 10)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 12)->toDateTimeString(),


            ], [
                'id' => 67,
                'booking_id' => 67,
                'room_id' => 67,
                'price' => 1237013,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 8, 12)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 13)->toDateTimeString(),


            ], [
                'id' => 68,
                'booking_id' => 68,
                'room_id' => 68,
                'price' => 8085000,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 8, 14)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 15)->toDateTimeString(),


            ], [
                'id' => 69,
                'booking_id' => 69,
                'room_id' => 59,
                'price' => 3156887,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 8, 15)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 8, 16)->toDateTimeString(),


            ], [
                'id' => 70,
                'booking_id' => 70,
                'room_id' => 42,
                'price' => 7697950,
                'date_number' => 1,
                'start_with' => \Carbon\Carbon::create(2020, 9, 16)->toDateTimeString(),
                'end_with' => \Carbon\Carbon::create(2020, 9, 17)->toDateTimeString(),


            ]
        ]);

        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
        \Illuminate\Support\Facades\DB::statement('ALTER SEQUENCE booking_details_id_seq RESTART WITH 71');
    }
}
