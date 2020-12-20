<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCarePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_care_plans', function (Blueprint $table) {
            $table->id();
            $table->string('Salary_basic');
            $table->string('salary_amount');
            $table->string('payment_type');
            $table->string('pf_cuntribution');
            $table->string('pf_no');
            $table->string('emp_pf_rate');
            $table->string('additional_rate');
            $table->string('total_rate');
            $table->string('emp_pf_rate2');
            $table->string('additional_rate2');
            $table->string('total_rate2');
            $table->string('esi_contribution');
            $table->string('esi_no');
            $table->string('em_esi_rate');
            $table->string('additional_esi_rate');
            $table->string('total_esi_rate');
            $table->foreignId('service_user_id')->nullable()->constrained('service_users')->onDelete('cascade');;
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
        Schema::dropIfExists('service_care_plans');
    }
}
