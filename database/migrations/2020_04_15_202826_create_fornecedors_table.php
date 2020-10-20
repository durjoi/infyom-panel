<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cnpj', 10, 0);
            $table->string('razao_social', 100);
            $table->string('fantasia', 100)->nullable();
            $table->string('endereco', 100);
            $table->integer('numero', false);
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->integer('cep', false);
            $table->string('contato', 100);
            $table->string('telefone', 50);
            $table->string('fax', 50)->nullable();
            $table->string('email', 100);
            $table->string('produtos', 255);
            $table->string('observacao', 255)->nullable();
            $table->string('situacao', 7);
            $table->datetime('incluidoem');
            $table->integer('idusuario', false);
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
        Schema::drop('fornecedors');
    }
}
