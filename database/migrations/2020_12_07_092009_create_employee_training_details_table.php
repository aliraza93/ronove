<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTrainingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_training_details', function (Blueprint $table) {
            $table->id();
            $table->string('companies_name');
            $table->string('company_location');
            $table->string('training_course');
            $table->string('periods_from');
            $table->string('periods_to');
            $table->foreignId('employee_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('employee_training_details');
    }
}
