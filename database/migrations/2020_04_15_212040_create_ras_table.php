<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('ra_descricao', 50);
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
        Schema::drop('ras');
    }
}
