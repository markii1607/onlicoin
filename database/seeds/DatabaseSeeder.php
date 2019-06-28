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
        'users'
	];

    public function run()
    {
        Eloquent::unguard();

		foreach ($this->tables as $i => $table) {
            $this->truncate($table);
            $seed = studly_case(str_singular($table)) . 'TableSeeder';
			$this->call($seed);	
		}
    }

    private function truncate($table)
	{
	  if (Schema::hasTable($table)) {
	      DB::table($table)->truncate();
	  }
	}
}
