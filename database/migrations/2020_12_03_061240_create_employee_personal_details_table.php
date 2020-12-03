<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('home_tel_no');
            $table->string('day_tel_no');
            $table->string('national_no');
            $table->string('email_address');
            $table->string('contact_at_work');
            $table->string('are_you_free');
            $table->string('are_you_applying');
            $table->string('driving_license');
            $table->string('license_category');
            $table->integer('employee_id')->unsigned();
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
        Schema::dropIfExists('employee_personal_details');
    }
}
