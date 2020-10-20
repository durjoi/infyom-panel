<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefeitosEncontradosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defeitos_encontrados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('defeito_encontrato_descricao');
            $table->timestamp('incluidodoem');
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
        Schema::drop('defeitos_encontrados');
    }
}
