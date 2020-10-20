<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueSaidaProdutosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_saida_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quantidade');
            $table->string('valor_unitario');
            $table->timestamp('incluidodoem');
            $table->integer('id_saida');
            $table->integer('id_productos');
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
        Schema::drop('estoque_saida_produtos');
    }
}
