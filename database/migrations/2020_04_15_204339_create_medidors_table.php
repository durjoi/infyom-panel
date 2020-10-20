<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedidorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('numero', 50);
            $table->integer('idlogradouro', false);
            $table->integer('idbairro', false);
            $table->string('poste_numero', 10)->nullable();
            $table->string('contrato', 15)->nullable();
            $table->decimal('capacidade_medicao', 10, 0);
            $table->decimal('capacidade_disjuntor', 10, 0);
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
        Schema::drop('medidors');
    }
}
