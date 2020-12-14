<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('hospital_id')->comment('FK');
            $table->unsignedBigInteger('department_id')->comment('FK');
            $table->bigInteger('bmdc_registered_number')->unique();
            $table->text('address');
            $table->string('designation');
            $table->longText('short_biography');
            $table->string('specialist');
            $table->date('date_of_birth');
            $table->string('blood_group');
            $table->longText('education');
            $table->enum('active_status', ['Active', 'Deactive']);
            $table->timestamps();
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
