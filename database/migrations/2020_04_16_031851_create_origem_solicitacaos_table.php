<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrigemSolicitacaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origem_solicitacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('origemsolicitacao_codigo', 2);
            $table->string('origemsolicitacao_descricao', 50);
            $table->string('origemsolicitacao_descritivo', 255);
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
        Schema::drop('origem_solicitacaos');
    }
}
