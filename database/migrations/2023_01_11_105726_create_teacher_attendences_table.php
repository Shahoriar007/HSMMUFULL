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
        Schema::create('teacher_attendences', function (Blueprint $table) {
            $table->id();
            $table->string('todayDate');
            $table->string('teacherId');
            $table->string('teacherName')->nullable();
            $table->string('inTime');
            $table->string('outTime')->nullable();
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
        Schema::dropIfExists('teacher_attendences');
    }
};
