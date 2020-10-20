<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpcontaip12sTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipcontaip_12s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('tipo_reg', 2)->nullable();
            $table->string('cnpj', 14)->nullable();
            $table->decimal('cod_cliente', 10, 0);
            $table->decimal('cod_contrato', 10, 0);
            $table->decimal('cod_multiservico', 10, 0);
            $table->string('num_cod_pag_cta_coletivo', 12)->nullable();
            $table->string('num_fatura', 10)->nullable();
            $table->decimal('codigo_instalacao', 10, 0);
            $table->string('cod_classe_subclasse', 2)->nullable();
            $table->string('cod_tarifa', 10)->nullable();
            $table->string('tensao_fornecimento', 11)->nullable();
            $table->date('data_fatura')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->date('data_leit_anterior')->nullable();
            $table->date('data_leit_atual')->nullable();
            $table->string('tipo_fatura', 3)->nullable();
            $table->string('sinal_do_saldo_da_fatura', 1)->nullable();
            $table->decimal('saldo_da_fatura', 10, 0);
            $table->decimal('valor_do_icms', 10, 0);
            $table->decimal('base_calculo_icms', 10, 0);
            $table->decimal('aliquota_icms', 10, 0);
            $table->decimal('perda_transformacao', 10, 0);
            $table->decimal('fator_de_potencia', 10, 0);
            $table->decimal('valor_da_demanda_contratada', 10, 0);
            $table->decimal('valor_da_demanda_contratada_na_ponta', 10, 0);
            $table->decimal('valor_da_demanda_contratada_fora_de_ponta', 10, 0);
            $table->decimal('valor_do_pis_fatura', 10, 0);
            $table->decimal('valor_do_cofins_fatura', 10, 0);
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
        Schema::drop('ipcontaip_12s');
    }
}
