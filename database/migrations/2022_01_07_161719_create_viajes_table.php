<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('lugar',40);
            $table->string('precio',3);
            $table->string('fecha');
        });
    }

    public function down()
    {
        Schema::dropIfExists('viajes');
    }
}
