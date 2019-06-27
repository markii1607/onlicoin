<?php

use Illuminate\Database\Seeder;
use App\Configuration;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $configs = [
            'subscription_reward' => 500,
            'referral_depth' => 5,
            'payment_date' => 10,
            'payment_month_skip' => 1,
            'e_wallet' => 'NONE',
            'hq_timezone' => 'Asia/Manila'
        ];

        Configuration::create($configs);
    }
}
