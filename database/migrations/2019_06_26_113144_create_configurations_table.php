<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subscription_reward')->comment('Reward when subscription is successful');
            $table->string('referral_depth')->comment('Referral level depth');
            $table->string('payment_date')->comment('Date where payouts will reflect');
            $table->string('payment_month_skip')->comment('Number of months where payouts will reflect. Default = 1');
            $table->text('e_wallet')->comment('E-Wallet addressof Onlicoin');
            $table->string('hq_timezone')->comment('Timezone of the HQ');
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
        Schema::dropIfExists('configurations');
    }
}
