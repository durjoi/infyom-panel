<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDigitacaoCadastrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digitacao_cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('lograduro');
            $table->integer('visavis');
            $table->string('referncia');
            $table->string('transformador');
            $table->string('medidor');
            $table->string('poste_numero');
            $table->integer('luminaria_numero');
            $table->string('coordenada_x');
            $table->string('coordenada_y');
            $table->string('poste_propriedade');
            $table->string('poste_status');
            $table->string('fase_ligacao');
            $table->string('luminaria_propriedade');
            $table->string('luminaria_estado');
            $table->integer('quantidade_lampada');
            $table->string('observacoes');
            $table->date('data_cadastro');
            $table->string('cadastrador');
            $table->timestamp('incluidodoem');
            $table->integer('idra');
            $table->integer('id_logradouro_tipo');
            $table->integer('id_rede');
            $table->integer('id_poste');
            $table->integer('id_lampada');
            $table->integer('id_rele');
            $table->integer('id_reator');
            $table->integer('id_objeto_iluminado');
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
        Schema::drop('digitacao_cadastros');
    }
}
