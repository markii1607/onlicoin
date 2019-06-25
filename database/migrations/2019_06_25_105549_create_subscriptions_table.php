<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->decimal('amount', 12, 12);
            $table->string('term')->comment('3 Months or 6 Months');
            $table->decimal('percentage', 5, 2);
            $table->datetime('date_subscribed');
            $table->datetime('date_expected_end');
            $table->boolean('is_renewed')->default(0);
            $table->datetime('date_renewed')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
