<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealizasTable extends Migration
{
    public function up()
    {
        Schema::create('realizas', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->integer('viaje_id');
            $table->foreign('viaje_id')->references('id')->on('viajes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('realizas');
    }
}
