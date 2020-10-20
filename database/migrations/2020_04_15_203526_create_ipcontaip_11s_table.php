<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpcontaip11sTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipcontaip_11s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('tipo_reg', 2)->nullable();
            $table->string('cnpj', 14)->nullable();
            $table->decimal('cod_cliente', 10, 0);
            $table->decimal('cod_contrato', 10, 0);
            $table->decimal('cod_multiservico', 10, 0);
            $table->string('compl_nome', 35)->nullable();
            $table->string('endereco_rua_av', 60)->nullable();
            $table->string('endereco_compl', 60)->nullable();
            $table->string('endereco_bairro', 40)->nullable();
            $table->string('endereco_municipio_uf_cep', 53)->nullable();
            $table->decimal('contaipano', 10, 0);
            $table->string('contaipmes', 10)->nullable();
            $table->date('contaipdatainclusao')->nullable();
            $table->string('contaipusuariologin', 10)->nullable();
            $table->string('segmento', 2)->nullable();
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
        Schema::drop('ipcontaip_11s');
    }
}
