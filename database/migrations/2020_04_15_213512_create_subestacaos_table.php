<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubestacaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subestacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('subestacao', 100);
            $table->string('transformador', 15);
            $table->string('instalacao', 15);
            $table->string('barramento', 15)->nullable();
            $table->string('bairro', 150)->nullable();
            $table->string('tensao_secundaria', 10)->nullable();
            $table->string('fases', 10)->nullable();
            $table->string('kvan', 10)->nullable();
            $table->datetime('incluidoem');
            $table->integer('idusuario', false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subestacaos');
    }
}
