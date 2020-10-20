<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransformadorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transformadors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('codigo', 50);
            $table->string('numerocia', 15);
            $table->integer('idlogradouro', false);
            $table->integer('idbairro', false);
            $table->string('poste_numero', 10)->nullable();
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
        Schema::drop('transformadors');
    }
}
