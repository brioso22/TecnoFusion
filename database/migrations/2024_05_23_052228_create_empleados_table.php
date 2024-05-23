<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('sucursal_id');
            $table->timestamps();

            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
