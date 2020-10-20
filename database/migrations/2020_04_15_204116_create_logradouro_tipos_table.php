<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogradouroTiposTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logradouro_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logradouro_tipo_descricao', 25);
            $table->string('logradouro_tipo_abreviado', 12);
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
        Schema::drop('logradouro_tipos');
    }
}
