<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResenasTable extends Migration
{
    public function up()
    {
        Schema::create('resenas', function (Blueprint $table) {
            $table->id();
            $table->string('comentario')->nullable();
            $table->string('calificacion')->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('equipo_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('resenas');
    }
}
