<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_communities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('blood_group');
            $table->date('donation_date');
            $table->string('contact_person_name');
            $table->string('phone_number');
            $table->string('location');

            $table->date('available_date')->nullable();
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
        Schema::dropIfExists('blood_communities');
    }
}
