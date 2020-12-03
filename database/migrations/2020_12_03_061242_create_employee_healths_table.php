<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_healths', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->unasigned;
            $table->string('disability');
            $table->string('disability_details');
            $table->string('arrangements');
            $table->string('arrangements_details');
            $table->string('days');
            $table->string('state_number');
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
        Schema::dropIfExists('employee_healths');
    }
}
