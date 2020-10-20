<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('senha', 10);
            $table->string('tipo', 13);
            $table->integer('telefone_ddd', false);
            $table->integer('telefone_numero', false);
            $table->string('empresa', 100);
            $table->string('cargo_setor', 100);
            $table->string('direcionar', 7);
            $table->integer('mensagem_instantanea', false);
            $table->integer('receber_mensagem', false);
            $table->integer('receber_sms', false);
            $table->datetime('incluidoem');
            $table->integer('w_acesso_whatsapp', false);
            $table->integer('w_menu_consultas', false);
            $table->integer('w_menu_veiculos', false);
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
        Schema::drop('usuarios');
    }
}
