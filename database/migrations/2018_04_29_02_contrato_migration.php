<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContratoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('idcontrato')->unique();
            $table->date('fechainicio');
            $table->date('fechaaceptacion');
            $table->date('fechatermino');
            $table->date('fechalimpago');
            $table->date('fechacorte');
            $table->double('preciototal');
            $table->integer('estadocontrato');
            $table->integer('estadocontratoAdmin');

            $table->unsignedInteger('idAdmin');
            $table->foreign('idAdmin')->references('idAdmin')->on('administradores');

            $table->unsignedInteger('idcontratodetalles');
            $table->foreign('idcontratodetalles')->references('idcontratodetalles')->on('contratodetalles');
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
        Schema::dropIfExists('contrato');
    }
}
