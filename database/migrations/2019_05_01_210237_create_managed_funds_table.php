<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagedFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managed_funds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->datetime('mf_date_start');
            $table->datetime('mf_date_end');
            $table->decimal('mf_amount',12,12);
            $table->string('mf_date_range',255);
            $table->decimal('mf_total_balance',12,12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('managed_funds');
    }
}
