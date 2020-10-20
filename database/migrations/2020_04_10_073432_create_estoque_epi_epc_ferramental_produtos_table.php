<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueEpiEpcFerramentalProdutosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_epi_epc_ferramental_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quantidade');
            $table->string('valor_unitario');
            $table->timestamp('incluidodoem');
            $table->integer('id_estoque_epi_epc_ferramental');
            $table->integer('id_produtos');
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
        Schema::drop('estoque_epi_epc_ferramental_produtos');
    }
}
