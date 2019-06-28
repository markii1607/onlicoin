<?php

use Illuminate\Database\Seeder;
use App\PersonalInformation as PI;

class PersonalInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pis = [
            'user_id'  => 1,
            'first_name' => 'Admin',
            'last_name' => 'Onlicoin'
        ];

        PI::create($pis);
    }
}
