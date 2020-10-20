<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueEntradasProdutosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_entradas_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quantidade');
            $table->string('dev_mat_novo_def');
            $table->string('dev_mat_n_apl');
            $table->string('dev_mat_apl');
            $table->string('valor_unitario');
            $table->string('valor_total');
            $table->timestamp('incluidodoem');
            $table->integer('id_entrada');
            $table->integer('id_producto');
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
        Schema::drop('estoque_entradas_produtos');
    }
}
