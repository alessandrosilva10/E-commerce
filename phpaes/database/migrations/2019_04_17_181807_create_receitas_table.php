<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_receita', function (Blueprint $table) {
            $table->increments('idReceita');
            /* Foreign Key */
            $table->integer('idUsuarioFk')->unsigned();   
            /* */
            $table->string('titulo', 50);
            $table->string('preparo', 200);
            $table->string('ingredientes', 200);
            $table->string('imagem');
            $table->boolean('aprovado');
        });

        Schema::table('tb_receita', function($table){
            $table->foreign('idUsuarioFk')->references('idUsuario')->on('tb_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_receita');
    }
}
