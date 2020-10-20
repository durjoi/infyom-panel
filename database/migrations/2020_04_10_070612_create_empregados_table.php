<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpregadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empregados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('funcao');
            $table->date('admissao');
            $table->date('desligamento');
            $table->string('situacao');
            $table->timestamp('incluidodoem');
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
        Schema::drop('empregados');
    }
}
