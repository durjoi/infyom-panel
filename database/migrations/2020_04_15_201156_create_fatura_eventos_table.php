<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaturaEventosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatura_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->integer('ano');
            $table->date('aberta_em');
            $table->integer('aberta_idusuario');
            $table->date('encaminhada_em');
            $table->integer('encaminhada_idusuario');
            $table->date('pago_em');
            $table->integer('pago_idusuario');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->string('titulo_relatorio');
            $table->integer('id_cidade');
            $table->integer('id_meses');
            $table->integer('id_empresa');
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
        Schema::drop('fatura_eventos');
    }
}
