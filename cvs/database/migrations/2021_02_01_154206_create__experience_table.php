<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Experiences', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titre');
            $table->string('body')->nullable();
            $table->dateTime('debut');
            $table->dateTime('fin');
            $table->unsignedBigInteger('cv_id')->nullable();
            $table->foreign('cv_id')->references('id')->on('cvs');
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
        Schema::dropIfExists('Experience');
    }
}
