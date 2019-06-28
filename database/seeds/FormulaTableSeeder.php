<?php

use Illuminate\Database\Seeder;
use App\Formula;

class FormulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formulas = [
            [
                'term_id' => 1,
                'investment_amount' => 10000,
                'interest_per_month' => 2.5,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ],
            [
                'term_id' => 2,
                'investment_amount' => 10000,
                'interest_per_month' => 3,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ],
            [
                'term_id' => 1,
                'investment_amount' => 50000,
                'interest_per_month' => 3,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ],
            [
                'term_id' => 2,
                'investment_amount' => 50000,
                'interest_per_month' => 4,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ],
            [
                'term_id' => 1,
                'investment_amount' => 100000,
                'interest_per_month' => 4 ,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ],
            [
                'term_id' => 2,
                'investment_amount' => 100000,
                'interest_per_month' => 2.5,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ],
            [
                'term_id' => 1,
                'investment_amount' => 250000,
                'interest_per_month' => 5,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ],
            [
                'term_id' => 1,
                'investment_amount' => 250000,
                'interest_per_month' => 6,
                'direct_ref_com' => 5,
                'overriding_com' => 1,
            ]
        ];

        foreach ($formulas as $formula) {
            Formula::create($formula);
        }
    }
}
