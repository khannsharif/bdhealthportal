<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id')->comment('FK');
            $table->unsignedBigInteger('hospital_id')->comment('FK');
            $table->longText('message');
            $table->timestamps();
            $table->foreign('patient_id')
                  ->references('id')
                  ->on('patient_registrations')
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
        Schema::dropIfExists('contacts');
    }
}
