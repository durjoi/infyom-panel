<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVeiculosMovimentacaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos_movimentacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idveiculos', false);
            $table->datetime('saida')->nullable();
            $table->datetime('retorno')->nullable();
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
        Schema::drop('veiculos_movimentacaos');
    }
}
