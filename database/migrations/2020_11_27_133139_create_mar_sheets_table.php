<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mar_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('medicine');
            $table->string('dosage');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('route');
            $table->string('time');
            $table->string('days');
            $table->string('instructions');
            $table->string('added_by');
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
        Schema::dropIfExists('mar_sheets');
    }
}
