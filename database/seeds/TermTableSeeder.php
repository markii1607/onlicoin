<?php

use Illuminate\Database\Seeder;
use App\Term;

class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = [
            [
                'term_name' => '3 Months',
                'term_percentage' => 2.5,
                'term_percent_investment' => 10.0
            ],
            [
                'term_name' => '6 Months',
                'term_percentage' => 3.0,
                'term_percent_investment'  => 20.0
            ]
        ];

        foreach ($terms as $term) {
            Term::create($term);
        }
    }
}
