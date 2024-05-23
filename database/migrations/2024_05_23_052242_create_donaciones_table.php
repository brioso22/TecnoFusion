<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonacionesTable extends Migration
{
    public function up()
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->id();
            $table->string('num_equipos')->nullable();
            $table->string('donador')->nullable();
            $table->string('estado')->nullable();
            $table->unsignedBigInteger('equipo_id');
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('donaciones');
    }
}
