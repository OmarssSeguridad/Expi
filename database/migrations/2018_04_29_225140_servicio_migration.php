<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServicioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('idservi')->unique();

            $table->unsignedInteger('idcontrato');
            $table->foreign('idcontrato')->references('idcontrato')->on('contratos');

            $table->unsignedInteger('idadmin');
            $table->foreign('idadmin')->references('idadmin')->on('administradores');

            $table->bigInteger('cuenta');
            $table->string('horarioabre');
            $table->string('horariofin');
            $table->string('nombreestacionamiento');
            $table->integer('estadoservicio');
            $table->integer('estadoservi');
            $table->double('longitud');
            $table->double('latitud');
            $table->double('calificacion');

            $table->bigInteger('notarjeta');
            $table->integer('cp');
            $table->integer('mm');
            $table->integer('aa');
            $table->integer('cvv');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
