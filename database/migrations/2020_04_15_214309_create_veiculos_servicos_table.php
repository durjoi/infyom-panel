<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVeiculosServicosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos_servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idveiculos', false);
            $table->date('data_servico');
            $table->string('descricao_servico', 1000);
            $table->decimal('valor_total', 10, 0);
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
        Schema::drop('veiculos_servicos');
    }
}
