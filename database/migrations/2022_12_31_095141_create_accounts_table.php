<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('total_tution_fees')->nullable();
            $table->string('total_salaries')->nullable();
            $table->string('fund_amount')->nullable();
            $table->string('electricity_bill');
            $table->string('staff_salaries');
            $table->string('water_bill');
            $table->string('miscellaneous')->nullable();
            $table->string('remaining')->nullable();
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
        Schema::dropIfExists('accounts');
    }
};
