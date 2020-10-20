<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSequencialsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sequencials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('protocolo', false);
            $table->integer('entrada', false);
            $table->integer('saida', false);
            $table->integer('poste_numero', false);
            $table->integer('obras', false);
            $table->integer('eventos', false);
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
        Schema::drop('sequencials');
    }
}
