<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salt1 = substr(sha1(rand()), 0, 7);
        $salt2 = substr(sha1(rand()), 0, 7);
        $salt3 = substr(sha1(rand()), 0, 7);
        $salt4 = substr(sha1(rand()), 0, 7);
        $salt5 = substr(sha1(rand()), 0, 7);
        $salt6 = substr(sha1(rand()), 0, 7);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        //Xóa toàn bộ dữ liệu cũ
        \Illuminate\Support\Facades\DB::table('accounts')->truncate();
        \Illuminate\Support\Facades\DB::table('accounts')->insert([
            [

                'id' => 1,
                'username' => 'trangtran',
                'password_hash' => md5('trangtran'. $salt1 ),
                'first_name' => 'Tran',
                'last_name' => 'Trang',
                'identity_card' => '123456789012',
                'email' => 'trangtran@gmail.com',
                'role' => 'user',
                'status' => 1,
                'salt' => $salt1,
                'created_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[

                'id' => 2,
                'username' => 'hoanghuy',
                'password_hash' => md5('hoanghuy'. $salt2 ),
                'first_name' => 'Hoang',
                'last_name' => 'Huy',
                'identity_card' => '453612784519',
                'email' => 'hoanghuy@gmail.com',
                'role' => 'user',
                'status' => 1,
                'salt' => $salt2,
                'created_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[

                'id' => 3,
                'username' => 'hathanh',
                'password_hash' => md5('hathanh'. $salt3 ),
                'first_name' => 'Ha',
                'last_name' => 'Thanh',
                'identity_card' => '037709659311',
                'email' => 'hathanh@gmail.com',
                'role' => 'user',
                'status' => 1,
                'salt' => $salt3,
                'created_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[

                'id' => 4,
                'username' => 'congmanh',
                'password_hash' => md5('congmanh'. $salt4 ),
                'first_name' => 'Cong',
                'last_name' => 'Manh',
                'identity_card' => '015789465327',
                'email' => 'congmanh@gmail.com',
                'role' => 'user',
                'status' => 1,
                'salt' => $salt4,
                'created_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[

                'id' => 5,
                'username' => 'haituan',
                'password_hash' => md5('haituan'. $salt5 ),
                'first_name' => 'Hai',
                'last_name' => 'Tuan',
                'identity_card' => '547231861387',
                'email' => 'haituan@gmail.com',
                'role' => 'user',
                'status' => 1,
                'salt' => $salt5,
                'created_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[

                'id' => 6,
                'username' => 'admin123',
                'password_hash' => md5('adminvip'. $salt4 ),
                'first_name' => 'ad',
                'last_name' => 'min',
                'identity_card' => '765438569019',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 1,
                'salt' => $salt4,
                'created_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('ALTER SEQUENCE accounts_id_seq RESTART WITH 7');
    }
}
