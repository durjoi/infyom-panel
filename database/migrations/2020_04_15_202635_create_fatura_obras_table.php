<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaturaObrasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatura_obras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idempresa', false);
            $table->string('numero', 12);
            $table->integer('idmeses', false);
            $table->integer('ano', false);
            $table->string('situacao', 11);
            $table->datetime('aberta_em')->nullable();
            $table->integer('aberta_idusuario', false);
            $table->datetime('encaminhada_em')->nullable();
            $table->integer('encaminhada_idusuario', false);
            $table->datetime('pago_em')->nullable();
            $table->integer('pago_idusuario', false);
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->string('titulo_relatorio', 500)->nullable();
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
        Schema::drop('fatura_obras');
    }
}
