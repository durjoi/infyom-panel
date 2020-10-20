<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpcontaip10sTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipcontaip_10s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcidade', false);
            $table->decimal('cod_cliente', 10, 0);
            $table->string('nome', 80)->nullable();
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
        Schema::drop('ipcontaip_10s');
    }
}
