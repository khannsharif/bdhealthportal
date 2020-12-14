<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id')->comment('FK');
            $table->unsignedBigInteger('department_id')->comment('FK');
            $table->unsignedBigInteger('hospital_id')->comment('FK');
            $table->date('appointment_date');
            $table->timestamp('appointment_time')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('status')->default('pending');
            $table->longText('problem');
            $table->enum('active_status', ['Active', 'Deactive']);
            $table->timestamps();
            $table->foreign('patient_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade');
            $table->foreign('hospital_id')
                  ->references('id')
                  ->on('hospitals')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
