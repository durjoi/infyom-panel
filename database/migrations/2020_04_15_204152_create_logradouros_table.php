<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogradourosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logradouros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('logradouro_codigo', false);
            $table->integer('logradouro_codigodiv', false);
            $table->integer('idlogradourotipo', false);
            $table->string('logradouro_titulo', 25)->nullable();
            $table->string('logradouro_preposicao', 4)->nullable();
            $table->string('logradouro_descricao', 200);
            $table->string('logradouro_conjunto', 100)->nullable();
            $table->string('logradouro_cep', 8)->nullable();
            $table->string('logradouro_estado', 9);
            $table->integer('idbairro', false);
            $table->string('trafego_pedestres', 7);
            $table->string('trafego_veiculos', 7);
            $table->string('importancia_via', 7);
            $table->string('arborizacao', 7);
            $table->integer('idempresa', false);
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
        Schema::drop('logradouros');
    }
}
