<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45)->nullable();
            $table->string('descripcion', 45)->nullable();
            $table->unsignedBigInteger('empleados_idEmpleado');
            $table->unsignedBigInteger('empleados_departamento_idDepartamento');
            $table->unsignedBigInteger('empleados_sucursales_idSucursal');
            $table->foreign('empleados_idEmpleado')->references('id')->on('empleados');
            $table->foreign('empleados_departamento_idDepartamento')->references('id')->on('departamentos');
            $table->foreign('empleados_sucursales_idSucursal')->references('id')->on('sucursales');
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
