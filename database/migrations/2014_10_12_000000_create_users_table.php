<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('contactNo');
            $table->integer('user_classification')->nullable();
            $table->string('user_referralCode')->nullable();
            $table->datetime('user_Datejoined');
            $table->boolean('verified')->default(false);
            $table->string('token');
            $table->string('referral_code')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
