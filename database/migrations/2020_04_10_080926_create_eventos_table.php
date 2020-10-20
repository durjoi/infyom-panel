<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('protocolo');
            $table->date('data_solicitacao');
            $table->string('solicitante');
            $table->string('telefones');
            $table->string('email');
            $table->string('comumento_numero');
            $table->string('documento_tipo');
            $table->string('evento_descricao');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->integer('quantidade_dias');
            $table->string('referencia');
            $table->string('responsavel');
            $table->string('telefones_responsavel');
            $table->string('email_responsavel');
            $table->string('observacao');
            $table->string('situacao');
            $table->string('enviado_impressao');
            $table->string('enviado_mobile');
            $table->string('enviado_mobile_id_turma');
            $table->string('c_informar_ciencia');
            $table->string('c_informar_concluida');
            $table->date('data_conclusao');
            $table->date('data_baixa');
            $table->string('dados_conclusivos');
            $table->date('alterador_em');
            $table->string('logradouro_descricao');
            $table->string('tipo_evento');
            $table->timestamp('incluidodoem');
            $table->integer('id_tipo_solicitante');
            $table->integer('id_tipo_solicitacao');
            $table->integer('id_logradouro');
            $table->integer('id_bairro');
            $table->integer('id_empresa');
            $table->integer('id_turma');
            $table->integer('id_cidade');
            $table->integer('id_usuario');
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
        Schema::drop('eventos');
    }
}
