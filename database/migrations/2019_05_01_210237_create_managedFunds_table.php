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
        Schema::create('managedFunds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->datetime('mf_dateStart');
            $table->datetime('mf_dateEnd');
            $table->decimal('mf_amount',12,12);
            $table->string('mf_dateRange',255);
            $table->decimal('mf_totalBalance',12,12);
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
        Schema::drop('managedFunds');
    }
}
