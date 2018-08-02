<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuperMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supers', function (Blueprint $table) {
            $table->increments('idsu');
            $table->string('nombre');
            $table->string('ap');
            $table->string('am');
            $table->bigInteger('telefono');
            $table->string('email', 50);
            $table->foreign('email')->references('email')->on('users');
            $table->bigInteger('cuenta');
            $table->rememberToken();
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
        Schema::dropIfExists('super');
    }
}
