<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(RoomsSeeder::class);
        $this->call(RoomTypeSeeder::class);
        $this->call(BookingSeeder::class);
        $this->call(BookingDetailSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
