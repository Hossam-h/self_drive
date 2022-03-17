<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviromentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enviroment_data', function (Blueprint $table) {
            $table->id();
            $table->integer('forward');
            $table->integer('backward');
            $table->integer('left');
            $table->integer('right');
            $table->string('image');
            $table->foreignId('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->date('Date_time');
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
        Schema::dropIfExists('enviroment_data');
    }
}
