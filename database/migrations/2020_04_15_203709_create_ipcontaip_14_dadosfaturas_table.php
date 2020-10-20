<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpcontaip14DadosfaturasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipcontaip_14_dadosfaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->string('tipo_reg', 2)->nullable();
            $table->string('cnpj', 14)->nullable();
            $table->decimal('cod_cliente', 10, 0);
            $table->decimal('cod_contrato', 10, 0);
            $table->string('num_medidor', 18)->nullable();
            $table->decimal('cod_multiservico', 10, 0);
            $table->string('num_doc_pag_coletiva', 12)->nullable();
            $table->string('num_fatura', 10)->nullable();
            $table->string('cod_conceito', 6)->nullable();
            $table->decimal('qtd_conceito', 10, 0);
            $table->string('preco_conceito', 12)->nullable();
            $table->string('sinal_do_valor_conceitos', 1)->nullable();
            $table->decimal('valor_final_com_imposto', 10, 0);
            $table->string('descricao_conceito', 60)->nullable();
            $table->decimal('contaipano', 10, 0);
            $table->string('contaipmes', 10)->nullable();
            $table->string('segmento', 50)->nullable();
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
        Schema::drop('ipcontaip_14_dadosfaturas');
    }
}
