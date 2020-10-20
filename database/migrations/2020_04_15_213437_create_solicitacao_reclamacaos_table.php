<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitacaoReclamacaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_reclamacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('protocolo_sistema', 21);
            $table->string('protocolo_falasalvador', 21);
            $table->string('protocolo_consorcio', 21);
            $table->datetime('data_atendimento');
            $table->string('hora_atendimento', 8);
            $table->string('horaregistro', 8);
            $table->string('temporegistro', 8);
            $table->string('solicitante_nome', 150);
            $table->string('solicitante_telefone', 50)->nullable();
            $table->string('solicitante_email', 100)->nullable();
            $table->string('poste_numero', 11)->nullable();
            $table->integer('luminaria_numero', false);
            $table->integer('idtiposolicitante', false);
            $table->integer('idtiposolicitacao', false);
            $table->integer('idlogradouro_cadastro', false);
            $table->integer('idbairro_cadastro', false);
            $table->string('visavis_cadastro', 50)->nullable();
            $table->string('referencia_cadastro', 255)->nullable();
            $table->integer('idlogradourotipo_informado', false);
            $table->string('logradouro_descricao_informado', 100)->nullable();
            $table->integer('idbairro_informado', false);
            $table->string('visavis_informado', 50)->nullable();
            $table->text('referencia_informado', 5000);
            $table->text('dadoscomplementares', 5000);
            $table->text('servicosolicitado', 5000);
            $table->datetime('incluidoem');
            $table->integer('idusuario', false);
            $table->integer('idempresa', false);
            $table->integer('enviado_impressao', false);
            $table->integer('enviado_mobile', false);
            $table->integer('enviado_mobile_idturma', false);
            $table->date('data_execucao')->nullable();
            $table->string('hora_execucao', 8)->nullable();
            $table->datetime('data_baixa')->nullable();
            $table->string('hora_baixa', 8)->nullable();
            $table->string('acao_adotada', 11)->nullable();
            $table->string('servico_realizado', 255)->nullable();
            $table->string('poste_numero_executado', 11)->nullable();
            $table->integer('luminaria_numero_executado', false);
            $table->integer('iddefeitoencontrado', false);
            $table->integer('idcausadefeito', false);
            $table->integer('idturma', false);
            $table->datetime('alterador_em');
            $table->integer('idusuarioalterou', false);
            $table->integer('sfs_informar_ciencia', false);
            $table->integer('c_informar_ciencia', false);
            $table->integer('c_informar_concluida', false);
            $table->integer('sfs_informar_concluida', false);
            $table->integer('idfatura', false);
            $table->decimal('tma_dias', 10, 0);
            $table->decimal('tma_horas', 10, 0);
            $table->string('referencia_poste_executado', 255)->nullable();
            $table->string('tipo_acao', 10)->nullable();
            $table->text('motivo_acao')->nullable();
            $table->integer('garantia', false);
            $table->string('garantia_os_anterior', 20);
            $table->string('supervisor', 100)->nullable();
            $table->string('motivo_atraso', 255)->nullable();
            $table->string('app_coordenada_x', 25)->nullable();
            $table->string('app_coordenada_y', 25)->nullable();
            $table->text('app_informacoes_gerais')->nullable();
            $table->integer('controle_idturma', false);
            $table->datetime('controle_data_entrega');
            $table->datetime('controle_data_recebido');
            $table->string('controle_acao', 10);
            $table->integer('controle_idmotivo', false);
            $table->datetime('impressoem');
            $table->integer('impressopor', false);
            $table->datetime('os_separada_em');
            $table->integer('os_separada_por', false);
            $table->integer('os_separada_para', false);
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
        Schema::drop('solicitacao_reclamacaos');
    }
}
