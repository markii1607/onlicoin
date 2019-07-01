<?php

use Illuminate\Database\Seeder;
use App\ManagedFund;
use Carbon\Carbon;

class ManagedFundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $formatDate = $date->format('Y-m-d H:i:s');

        $funds = [
            'user_id' => 1,
            'term_id' => 1,
            'formula_id' => 1,
            'mf_date_start' => $formatDate,
            'mf_date_end' => $date->addMonths(3),
            'mf_amount' => 10000
        ];

        ManagedFund::create($funds);
    }
}
