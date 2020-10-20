<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaturaEventosOsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatura_eventos_os', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor_os');
            $table->timestamp('incluidodoem');
            $table->integer('id_factura_eventos');
            $table->integer('id_eventos');
            $table->integer('id_cidade');
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
        Schema::drop('fatura_eventos_os');
    }
}
