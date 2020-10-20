<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitacaoMaterialsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idsolicitacaoreclamacao', false);
            $table->integer('idcontratoitens', false);
            $table->decimal('mo_quantidade', 10, 0);
            $table->string('mo_origem', 10);
            $table->decimal('mt_quantidade', 10, 0);
            $table->string('mt_origem', 10);
            $table->datetime('incluidoem');
            $table->integer('idusuario', false);
            $table->integer('item_com_vandalismo', false);
            $table->integer('sucata_nao_retornada', false);
            $table->integer('garantia', false);
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
        Schema::drop('solicitacao_materials');
    }
}
