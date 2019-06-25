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
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('ip_address');
            $table->datetime('user_date_joined');
            $table->boolean('verified')->default(false);
            $table->string('token');
            $table->string('referral_code')->nullable();
            $table->boolean('is_subscribed')->default(0);
            $table->boolean('is_active')->default(1);
            $table->string('g_link')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('tw_link')->nullable();
            $table->string('LI_link')->nullable();
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
