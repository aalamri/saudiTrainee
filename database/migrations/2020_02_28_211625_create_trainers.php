<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('nameAr',255);
            $table->string('nameEn',255);
            $table->string('phone',50);
            $table->string('email',50);
            $table->string('twitter')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('facebook')->nullable();
            $table->string('city',50);
            $table->string('degree');
            $table->string('trainingArea');
            $table->string('certificate')->nullable();
            $table->longText('experience')->nullable();
            $table->string('image')->nullable();
            $table->integer("user_id")->unsigned();
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
        Schema::dropIfExists('trainers');
    }
}
