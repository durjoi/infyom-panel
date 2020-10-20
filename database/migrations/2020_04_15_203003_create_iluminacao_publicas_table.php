<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIluminacaoPublicasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iluminacao_publicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->integer('idra', false);
            $table->integer('idbairro', false);
            $table->integer('idlogradouro', false);
            $table->integer('idposte', false);
            $table->string('poste_numero', 10);
            $table->decimal('coordenada_x', 10, 0);
            $table->decimal('coordenada_y', 10, 0);
            $table->integer('visavis', false);
            $table->string('referencia', 255)->nullable();
            $table->string('poste_propriedade', 14);
            $table->string('poste_status', 15);
            $table->date('poste_data_instalacao');
            $table->integer('idsuporte', false);
            $table->date('suporte_data_instalacao');
            $table->integer('idluminaria', false);
            $table->decimal('luminaria_numero', 10, 0);
            $table->string('fase_ligacao', 3)->nullable();
            $table->integer('altura_montagem', false);
            $table->date('luminaria_data_instalacao');
            $table->integer('idlampada', false);
            $table->integer('quantidade_lampada', false);
            $table->decimal('horas_ligada', 10, 0);
            $table->date('lampada_data_instalacao');
            $table->integer('idreator', false);
            $table->date('reator_data_instalacao');
            $table->integer('idrele', false);
            $table->date('rele_data_instalacao');
            $table->integer('idrede', false);
            $table->integer('idtransformador', false);
            $table->integer('idmedidor', false);
            $table->date('medidor_data_instalacao');
            $table->integer('idobjetoiluminado', false);
            $table->integer('idtarifa', false);
            $table->string('observacoes', 1000)->nullable();
            $table->decimal('demanda_w', 10, 0);
            $table->decimal('consumo_kwh', 10, 0);
            $table->decimal('quantidade_os_pendente', 10, 0);
            $table->decimal('quantidade_os_executada', 10, 0);
            $table->decimal('quantidade_os_cancelada', 10, 0);
            $table->decimal('quantidade_os_normalizada', 10, 0);
            $table->string('icone', 255);
            $table->datetime('incluidoem');
            $table->integer('idusuarioi', false);
            $table->datetime('alteradoem');
            $table->integer('idusuario', false);
            $table->integer('cadastro_manual', false);
            $table->integer('iddigitacao_cadastro', false);
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
        Schema::drop('iluminacao_publicas');
    }
}
