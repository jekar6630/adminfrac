<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('cvesae');
            $table->string('street');
            $table->string('schedule');
            $table->boolean('status');
            $table->integer('idType');
            $table->integer('idLot');
            $table->integer('idApple');
            $table->integer('idSector');
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
        Schema::dropIfExists('direccions');
    }
}
