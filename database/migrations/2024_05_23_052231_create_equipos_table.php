<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('precio')->nullable();
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('marca_id');
            $table->string('descripcion')->nullable();
            $table->string('puntuacion')->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
