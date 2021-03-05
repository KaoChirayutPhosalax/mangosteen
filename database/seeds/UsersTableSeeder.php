<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->insert([
            'name' => 'ผู้ดูแลระบบ',
            'lastname' => 'ควบคุม',
            'username' => 'admin',
            // 'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567890'),
            'remember_token' => str_random(10),
            'type' => 'admin',
        ]);

        $user->insert([
            'name' => 'เกษตรกร',
            'lastname' => 'เกษตรกร',
            'address' => '123/12',
            'tel' => '0801237895',
            'account' => '1212312121',
            'bank' => 'ธกส.',
            'username' => 'farmer',
            // 'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'remember_token' => str_random(10),
            'type' => 'farmer',
        ]);

        $user->insert([
            'name' => 'ผู้ประมูล',
            'lastname' => 'ผู้ประมูล',
            'address' => '7878/98',
            'tel' => '0999999999',
            'account' => '787898',
            'bank' => 'กสิกร',
            'username' => 'bidder',
            // 'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'remember_token' => str_random(10),
            'type' => 'bidder',
        ]);
    }
}
