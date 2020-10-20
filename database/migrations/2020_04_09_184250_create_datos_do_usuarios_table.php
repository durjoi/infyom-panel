<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosDoUsuariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_do_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
            $table->string('tipo');
            $table->string('telefone_ddd');
            $table->string('telefone_numero');
            $table->string('empresa');
            $table->string('cargo_setor');
            $table->string('direcionar');
            $table->string('mensagem_instantanea');
            $table->string('receber_sms');
            $table->string('w_acesso_whatsapp');
            $table->string('w_menu_consultas');
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
        Schema::drop('datos_do_usuarios');
    }
}
