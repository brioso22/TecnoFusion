<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->unsignedBigInteger('telefono')->nullable();
            $table->string('gmail')->nullable();
            $table->unsignedBigInteger('almacen_id');
            $table->timestamps();

            $table->foreign('almacen_id')->references('id')->on('almacenes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
