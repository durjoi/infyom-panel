<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueEntradasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_operacao');
            $table->integer('numero_nf');
            $table->integer('numero_rm');
            $table->string('observacao');
            $table->timestamp('incluidodoem');
            $table->integer('id_operacao');
            $table->integer('id_fornecedor');
            $table->integer('id_obras_estoque');
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
        Schema::drop('estoque_entradas');
    }
}
