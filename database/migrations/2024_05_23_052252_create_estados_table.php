<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('estado_equipo', 45)->nullable();
            $table->string('fecha_adquisicion', 45)->nullable();
            $table->string('descripcion', 45)->nullable();
            $table->unsignedBigInteger('equipos_idEquipo');
            $table->foreign('equipos_idEquipo')->references('id')->on('equipos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
