<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObrasOrcamentosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras_orcamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idobras', false);
            $table->integer('idcontratoitens', false);
            $table->decimal('quantidade_mo', 10, 0);
            $table->string('origem_mo', 10);
            $table->decimal('quantidade_mt', 10, 0);
            $table->string('origem_mt', 10);
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
        Schema::drop('obras_orcamentos');
    }
}
