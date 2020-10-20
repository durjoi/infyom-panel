<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObrasEstoquesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras_estoques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('obras_estoque_descricao', 100);
            $table->string('tipo', 50)->nullable();
            $table->string('status', 12);
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
        Schema::drop('obras_estoques');
    }
}
