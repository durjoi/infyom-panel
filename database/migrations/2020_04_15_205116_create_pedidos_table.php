<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idpedidocabecalho', false);
            $table->datetime('data_pedido');
            $table->integer('idobrasestoque', false);
            $table->integer('pedido_encaminhado', false);
            $table->datetime('pedido_encaminhado_data');
            $table->string('pedido_encaminhado_observacao', 500)->nullable();
            $table->integer('pedido_fechado', false);
            $table->datetime('pedido_fechado_data');
            $table->string('pedido_fechado_observacao', 500)->nullable();
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
        Schema::drop('pedidos');
    }
}
