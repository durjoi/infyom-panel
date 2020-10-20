<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratoItensAjustesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_itens_ajustes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_inicio');
            $table->string('ajuste');
            $table->timestamp('incluidodoem');
            $table->string('id_contrato');
            $table->string('id_cidade');
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
        Schema::drop('contrato_itens_ajustes');
    }
}
