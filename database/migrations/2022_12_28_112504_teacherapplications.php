<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherapplications', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();

            $table->string('phone')->nullable();

            $table->string('photo')->nullable();
            $table->string('gender')->nullable();
            $table->string('ssc_year')->nullable();
            $table->string('Hsc_year')->nullable();

            $table->string('grad_year')->nullable();
            $table->string('ssc_gpa')->nullable();
            $table->string('hsc_gpa')->nullable();
            $table->string('grad_cgpa')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('grad_dept')->nullable();
            $table->string('grad_major')->nullable();
            $table->string('position')->nullable();
            $table->string('initial')->nullable();
            $table->string('designation')->nullable();
            $table->string('cv')->nullable();
            $table->string('cover_let')->nullable();
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
        Schema::dropIfExists('teacherapplications');
    }
};
