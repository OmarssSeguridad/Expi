<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CalculoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('calculos', function (Blueprint $table) {
            $table->increments('idcalculo');

            $table->date('fechaentrada');
            $table->date('fechasalida');
            $table->integer('total');

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
        //
    }
}
