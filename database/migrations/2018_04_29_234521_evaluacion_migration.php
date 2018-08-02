<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvaluacionMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->increments('idevalua');
            $table->integer('calificacion');
            $table->string('comentario');
            $table->timestamps();

            $table->unsignedInteger('idservi');
            $table->foreign('idservi')->references('idservi')->on('servicios');
            $table->unsignedInteger('idusuario');
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion');
    }
}
