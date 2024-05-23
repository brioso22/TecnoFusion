<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenesTable extends Migration
{
    public function up()
    {
        Schema::create('almacenes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_id');
            $table->string('cantidad')->nullable();
            $table->string('precio')->nullable();
            $table->string('modelo')->nullable();
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('almacenes');
    }
}
