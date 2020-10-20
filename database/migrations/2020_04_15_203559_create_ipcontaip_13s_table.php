<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpcontaip13sTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipcontaip_13s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('tipo_reg', 2)->nullable();
            $table->string('cnpj', 14)->nullable();
            $table->decimal('cod_cliente', 10, 0);
            $table->decimal('cod_contrato', 10, 0);
            $table->decimal('cod_multiservico', 10, 0);
            $table->string('num_doc_pag_coletiva', 12)->nullable();
            $table->string('num_fatura', 10)->nullable();
            $table->string('num_medidor', 18)->nullable();
            $table->string('descr_funcao_reduzida', 6)->nullable();
            $table->date('data_leit_anterior')->nullable();
            $table->date('data_leit_atual')->nullable();
            $table->decimal('leitura', 10, 0);
            $table->decimal('constante', 10, 0);
            $table->string('sinal_do_ajuste', 1)->nullable();
            $table->decimal('ajuste', 10, 0);
            $table->decimal('csu_dem_lida', 10, 0);
            $table->decimal('csu_dem_lida_com_ajuste', 10, 0);
            $table->string('descricao_funcao', 60)->nullable();
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
        Schema::drop('ipcontaip_13s');
    }
}
