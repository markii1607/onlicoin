<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_balances', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->integer('user_id')->index();
            $table->decimal('current_fund',12,12);
            $table->decimal('manage_fund',12,12);
            $table->decimal('oct',12,12);
            $table->decimal('cash',12,12);
=======
            $table->unsignedInteger('user_id')->index();
            $table->decimal('current_fund', 24, 8);
            $table->decimal('manage_fund', 24, 8);
            $table->decimal('subscription_fund', 24, 8);
            $table->decimal('oct', 24, 8);
            $table->decimal('cash', 24, 8);
>>>>>>> b1c7edf788eec6b2cb7ca4c191ade8dc9e7c18c2
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
        Schema::dropIfExists('user_balances');
    }
}
