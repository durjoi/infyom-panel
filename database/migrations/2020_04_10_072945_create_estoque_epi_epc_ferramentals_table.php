<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueEpiEpcFerramentalsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_epi_epc_ferramentals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('autorizado_por');
            $table->string('actualicao');
            $table->string('observacao');
            $table->timestamp('incluidodoem');
            $table->integer('id_operacao');
            $table->integer('id_empregados');
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
        Schema::drop('estoque_epi_epc_ferramentals');
    }
}
