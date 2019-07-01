<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

	private $tables = [
        'configurations',
        'formulas',
        'managed_funds',
        'personal_informations',
        'terms',
        'users',
        'roles',
        'model_has_roles'
	];

    public function run()
    {
        Eloquent::unguard();

		foreach ($this->tables as $i => $table) {
            $seed = studly_case(str_singular($table)) . 'TableSeeder';
			$this->call($seed);	
		}
    }
}
