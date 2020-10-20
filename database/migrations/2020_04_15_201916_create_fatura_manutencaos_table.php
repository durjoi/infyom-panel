<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaturaManutencaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatura_manutencaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->integer('ano');
            $table->string('situacao');
            $table->date('aberta_em');
            $table->integer('aberta_id_usuario');
            $table->date('encaminhada_em');
            $table->integer('encaminhada_id_usuario');
            $table->date('pago_em');
            $table->integer('pago_id_usuario');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->integer('id_cidade');
            $table->integer('id_empresa');
            $table->integer('id_meses');
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
        Schema::drop('fatura_manutencaos');
    }
}
