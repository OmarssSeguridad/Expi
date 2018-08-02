<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PagoSMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_s', function (Blueprint $table) {

            $table->unsignedInteger('idcontrato');
            $table->integer('notarjeta');
            $table->bigInteger('cuentasu');
            $table->time('fechapogo');
            $table->string('concepto');
            $table->integer('idsuperusuario');
            $table->double('monto');

            $table->timestamps();

            $table->foreign('idcontrato')->references('idcontrato')->on('contratos');

            $table->unsignedInteger('idsu');
            $table->foreign('idsu')->references('idsu')->on('supers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_s');
    }
}
