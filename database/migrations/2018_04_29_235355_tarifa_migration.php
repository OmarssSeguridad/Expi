<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TarifaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas', function (Blueprint $table) {
            $table->increments('idtarifa');
            $table->timestamps();
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->time('tiempobase');
            $table->double('tarifabase');
            $table->double('tarifatiempoagregado');
            $table->time('tiempoagrado');
            $table->time('tiempodegraci');
            $table->integer('estado');
            $table->unsignedInteger('idser');
            $table->foreign('idser')->references('idservi')->on('servicios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifa');
    }
}
