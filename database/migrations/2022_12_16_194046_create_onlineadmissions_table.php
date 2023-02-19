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
        Schema::create('onlineadmissions', function (Blueprint $table) {
            $table->id();

            $table->string('studentname_in_bangla');
            $table->string('studentname_in_english');
            $table->string('birthDate');
            $table->string('ageYears');
            $table->string('ageMonths');

            $table->string('birthReg');
            $table->string('nationality');
            $table->string('bloodGroup');

            $table->string('completed_class');
            $table->string('pre_institution');
            $table->string('seeking_admission_class');
            $table->string('admitted_class')->nullable();
            $table->string('admitted_section')->nullable();
            $table->string('admission_type');
            $table->string('roll')->nullable();

            $table->string('siblingsName')->nullable();

            $table->string('fathername_in_bangla');
            $table->string('fathername_in_english');
            $table->string('fatherOccupation');
            $table->string('father_edu_qua');
            $table->string('fatherNid');

            $table->string('mothername_in_bangla');
            $table->string('mothername_in_english');
            $table->string('motherOccupation');
            $table->string('mother_edu_qua');
            $table->string('motherNid');

            $table->string('monthlyIncome_parents_in_number');
            $table->string('monthlyIncome_parents_in_words')->nullable();

            $table->string('phoneNumber_father');
            $table->string('phoneNumber_mother');

            $table->string('emailID_father')->nullable();
            $table->string('emailID_mother')->nullable();

            $table->string('whatsappNumb')->nullable();
            $table->string('emergencyNumb')->nullable();

            $table->string('current_address');
            $table->string('permanent_address');

            $table->string('transport');

            $table->string('photo');


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
        Schema::dropIfExists('onlineadmissions');
    }
};
