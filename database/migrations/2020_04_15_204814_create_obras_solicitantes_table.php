<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObrasSolicitantesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras_solicitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idobras', false);
            $table->string('solicitante_nome', 100);
            $table->string('solicitante_telefone', 100);
            $table->string('solicitante_email', 100);
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
        Schema::drop('obras_solicitantes');
    }
}
