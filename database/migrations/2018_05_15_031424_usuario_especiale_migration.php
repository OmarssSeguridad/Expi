<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioEspecialeMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuarios_es', function (Blueprint $table) {

            $table->unsignedInteger('iduseres');
            $table->unsignedInteger('idusuario');
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');
            $table->unsignedInteger('idAdmin');
            $table->foreign('idadmin')->references('idadmin')->on('administradores');

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
