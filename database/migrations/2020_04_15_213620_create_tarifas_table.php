<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 3);
            $table->integer('idmeses', false);
            $table->integer('ano_referencia', false);
            $table->decimal('valor', 10, 0);
            $table->decimal('aliquota', 10, 0);
            $table->string('resolucao_annel', 100)->nullable();
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
        Schema::drop('tarifas');
    }
}
