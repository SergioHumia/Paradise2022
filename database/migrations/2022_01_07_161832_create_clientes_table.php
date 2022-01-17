<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('apellidos',20);
            $table->string('email',50)->unique();
            $table->string('f_nacimiento');
            $table->string('telefono',20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
