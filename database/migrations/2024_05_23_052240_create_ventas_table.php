<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('total')->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('sucursal_id');
            $table->unsignedBigInteger('equipo_id');
            $table->unsignedBigInteger('detalle_venta_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('detalle_venta_id')->references('id')->on('detalle_ventas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
