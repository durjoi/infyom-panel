<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespostasMensagemDiariasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas_mensagem_diarias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idusuarioreceber', false);
            $table->date('enviadoem');
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
        Schema::drop('respostas_mensagem_diarias');
    }
}
