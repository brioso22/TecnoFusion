<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaReclamosTable extends Migration
{
    public function up()
    {
        Schema::create('respuesta_reclamos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('respuesta')->nullable();
            $table->unsignedBigInteger('reclamo_id');
            $table->timestamps();

            $table->foreign('reclamo_id')->references('id')->on('reclamos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('respuesta_reclamos');
    }
}
