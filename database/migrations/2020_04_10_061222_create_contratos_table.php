<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contrato_numero');
            $table->string('contrato_tipo');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->string('fatork');
            $table->string('operacao');
            $table->timestamp('incluidodoem');
            $table->string('id_empresa');
            $table->string('id_cidade');
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
        Schema::drop('contratos');
    }
}
