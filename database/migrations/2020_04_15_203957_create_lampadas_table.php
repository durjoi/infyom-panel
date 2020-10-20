<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLampadasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lampada_descricao', 100);
            $table->decimal('lampada_potencia', 10, 0);
            $table->datetime('incluidoem');
            $table->integer('idusuario', false);
            $table->string('lampada_abreveada', 3)->nullable();
            $table->integer('perda_rator', false);
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
        Schema::drop('lampadas');
    }
}
