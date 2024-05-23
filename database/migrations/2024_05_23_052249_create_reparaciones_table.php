<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparacionesTable extends Migration
{
    public function up()
    {
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->unsignedBigInteger('sucursal_id')->nullable();
            $table->unsignedBigInteger('empleado_id')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('fecha')->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reparaciones');
    }
}
