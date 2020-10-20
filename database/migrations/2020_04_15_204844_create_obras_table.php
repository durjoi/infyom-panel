<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObrasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('protocolo', 21);
            $table->string('numero_processo', 20);
            $table->date('data_processo');
            $table->integer('idtiposolicitante', false);
            $table->integer('idtiposolicitacao', false);
            $table->string('solicitante', 100);
            $table->string('telefones', 100);
            $table->string('email', 100);
            $table->integer('idra', false);
            $table->integer('idlogradouro', false);
            $table->integer('idbairro', false);
            $table->integer('idtipoacao', false);
            $table->string('servico_solicitado', 2000);
            $table->string('situacao', 12);
            $table->datetime('incluidoem');
            $table->integer('idusuario', false);
            $table->integer('enviado_impressao', false);
            $table->integer('enviado_mobile', false);
            $table->integer('enviado_mobile_idturma', false);
            $table->string('referencia', 255)->nullable();
            $table->string('observacao', 500)->nullable();
            $table->string('telefone_contato', 50)->nullable();
            $table->integer('idempresa', false);
            $table->date('data_prevista_inicial')->nullable();
            $table->date('data_prevista_final')->nullable();
            $table->string('fiscal_prefeitura', 100)->nullable();
            $table->string('art_obra', 20)->nullable();
            $table->integer('c_informar_ciencia', false);
            $table->integer('c_informar_concluida', false);
            $table->date('data_execucao')->nullable();
            $table->string('hora_execucao', 5)->nullable();
            $table->datetime('data_baixa')->nullable();
            $table->string('hora_baixa', 5)->nullable();
            $table->integer('idturma', false);
            $table->datetime('alterador_em')->nullable();
            $table->integer('idusuarioalterou', false);
            $table->string('logradouro_descricao', 150);
            $table->string('observacao_fatura', 5000)->nullable();
            $table->string('complemento_turma', 500)->nullable();
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
        Schema::drop('obras');
    }
}
