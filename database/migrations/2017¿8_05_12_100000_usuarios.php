<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idusuario')->unique();
            $table->string('nombre', 25);
            $table->string('email', 50);
            $table->foreign('email')->references('email')->on('users');
            $table->string('ap', 25);
            $table->string('am', 25);
            $table->bigInteger('telefono');
            $table->text('contrasenia', 25);
            $table->string('clave', 25);

            $table->integer('estadousuario');
            $table->string('codigobarras', 25);
            $table->integer('tipousuario');
            $table->unsignedInteger('idterminos');
            $table->foreign('idterminos')->references('idterminos')->on('terminos');
            $table->rememberToken();
            $table->timestamps();

            $table->bigInteger('notarjeta');
            $table->integer('cp');
            $table->integer('mm');
            $table->integer('aa');
            $table->integer('cvv');

        });
        //

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
