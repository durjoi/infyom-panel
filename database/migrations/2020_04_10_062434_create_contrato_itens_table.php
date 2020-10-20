<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratoItensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_itens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->string('contrato_itens_descricao');
            $table->string('valor_mao_obra');
            $table->string('valor_material');
            $table->string('aplicacao');
            $table->integer('bloqueio_material');
            $table->string('valor_mao_obra_anterior');
            $table->string('valor_material_anterior');
            $table->string('fatork');
            $table->string('fatork_operacao');
            $table->string('tempo_garantia');
            $table->string('tempo_garantia_periodo');
            $table->integer('codigo_produto');
            $table->timestamp('incluidodoem');
            $table->string('id_contrato');
            $table->string('id_unidade');
            $table->string('id_marca_produto');
            $table->string('id_cidade');
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
        Schema::drop('contrato_itens');
    }
}
