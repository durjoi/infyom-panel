<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventosOrcamentosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_orcamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quantidade');
            $table->timestamp('incluidodoem');
            $table->integer('id_eventos');
            $table->integer('id_contrato_itens');
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
        Schema::drop('eventos_orcamentos');
    }
}
