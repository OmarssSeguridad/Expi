<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PagoCMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_cs', function (Blueprint $table) {
            $table->increments('idpagoc');
            $table->timestamps();
            $table->time('fechapago');
            $table->double('monto');
            $table->string('concepto');
            $table->integer('folio');
            $table->integer('notarjeta');
            $table->integer('estadopago');

            $table->unsignedInteger('idcalculo');
            $table->foreign('idcalculo')->references('idcalculo')->on('calculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_c');
    }
}
