<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('produtos_descricao', 255);
            $table->integer('idmarca', false);
            $table->integer('idunidade', false);
            $table->decimal('quantidade_atual', 10, 0);
            $table->decimal('quantidade_minima', 10, 0);
            $table->decimal('valor_unitario', 10, 0);
            $table->integer('idfornecedor', false);
            $table->integer('idfabricante', false);
            $table->string('local', 50)->nullable();
            $table->integer('idaplicacao', false);
            $table->string('excluido', 1);
            $table->datetime('incluidoem');
            $table->integer('idusuario', false);
            $table->string('codigo_itens_contrato', 500);
            $table->date('atualizacao_manual')->nullable();
            $table->integer('atualizacao_manual_idusuario', false);
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
        Schema::drop('produtos');
    }
}
