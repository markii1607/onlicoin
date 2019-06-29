<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Http\Controllers\Controller;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'email' => 'onlicointoken@gmail.com',
            'password' => bcrypt('master'),
            'ip_address' => Request::ip(),
            'user_date_joined' => date('Y-m-d H:i:s'),
            'verified' => 1,
            'token' => Controller::generateCode(),
            'referral_code' => Controller::generateCode(8)
        ];

        User::create($users);
    }
}
