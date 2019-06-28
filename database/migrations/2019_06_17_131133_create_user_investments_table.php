<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_investments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('formula_id')->nullable();
            $table->unsignedInteger('term_id')->nullable();
            $table->decimal('amount', 24, 8);
            $table->decimal('amount_computed', 24, 8);
            $table->datetime('date_invested');
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
        Schema::dropIfExists('user_investments');
    }
}
