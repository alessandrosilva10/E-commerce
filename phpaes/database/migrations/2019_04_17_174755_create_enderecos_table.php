<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_endereco', function (Blueprint $table) {
            $table->increments('idEndereco');
            /* Foreign Key */
            $table->integer('idCidadeFk')->unsigned();
            $table->integer('idPessoaFk')->unsigned();
            /* Foreign Key */
            $table->string('endereco', 128);
            $table->string('complemento', 32);
            $table->timestamp('dataRegistro')->useCurrent();
        });
        Schema::table('tb_endereco', function($table){
            $table->foreign('idCidadeFk')->references('idCidade')->on('tb_cidade');
            $table->foreign('idPessoaFk')->references('idPessoa')->on('tb_pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_endereco');
    }
}
