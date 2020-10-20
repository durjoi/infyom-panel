<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpcontaipSecretariasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipcontaip_secretarias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('secretaria_sigla', 50);
            $table->string('secretaria_nome', 100);
            $table->string('secretaria_tipo', 50);
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
        Schema::drop('ipcontaip_secretarias');
    }
}
