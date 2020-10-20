<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidoCabecalhosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_cabecalhos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('centro_custo', 100);
            $table->string('almoxarifado', 100);
            $table->string('telefone_fixo', 11);
            $table->string('telefone_celular', 11);
            $table->string('cnpj', 19);
            $table->string('inscricao_estadual', 18);
            $table->string('gerente_geral', 100);
            $table->string('encarregado_eletrica', 100);
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
        Schema::drop('pedido_cabecalhos');
    }
}
