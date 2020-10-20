<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueSaidasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_saidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('solicitante');
            $table->string('autorizado_por');
            $table->string('actualizacao');
            $table->string('observacao');
            $table->timestamp('incluidodoem');
            $table->integer('id_operacao');
            $table->integer('id_obras_estoque');
            $table->integer('id_bairro');
            $table->integer('id_turma');
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
        Schema::drop('estoque_saidas');
    }
}
