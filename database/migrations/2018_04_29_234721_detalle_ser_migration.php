<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleSerMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_sers', function (Blueprint $table) {
            $table->time('tiempo');
            $table->double('total');
            $table->integer('folio');
            $table->integer('estadoSer');

            $table->unsignedInteger('idusuario');
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');

            $table->unsignedInteger('idpagoc');
            $table->foreign('idpagoc')->references('idpagoc')->on('pago_cs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ser');
    }
}
