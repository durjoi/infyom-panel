<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensagemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idusuario_de', false);
            $table->integer('idusuario_para', false);
            $table->datetime('enviadaem');
            $table->string('titulo', 100)->nullable();
            $table->string('corpo', 1000)->nullable();
            $table->integer('situacao', false);
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
        Schema::drop('mensagems');
    }
}
