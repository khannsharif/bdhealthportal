<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('appointment_id')->comment('FK');
            $table->foreignId('doctor_id')->references('id')->on('users');
            $table->unsignedBigInteger('patient_id')->comment('FK');
            $table->longText('cheif_complain');
            $table->longText('medicine_description');
            /*$table->string('medicine_name');
            $table->string('medicine_type');
            $table->integer('medicine_days')->nullable();
            $table->longText('instruction');*/
            $table->string('report')->nullable();
            $table->longText('note')->nullable();
            $table->tinyInteger('type');
            $table->enum('active_status', ['Active', 'Deactive']);
            $table->timestamps();
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
}
