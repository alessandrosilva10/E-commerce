<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_produto_carrinho', function (Blueprint $table) {
            $table->increments('idProdCar');
            /* Foreign Key */
            $table->integer('idCarrinhoFk')->unsigned();
            $table->integer('idProdutoFk')->unsigned();
            /* */
            $table->datetime('dataRemovido');
            $table->timestamp('dataRegistrado')->useCurrent();
        });
        Schema::table('tb_produto_carrinho', function($table) {
            $table->foreign('idCarrinhoFk')->references('idCarrinho')->on('tb_carrinho');
            $table->foreign('idProdutoFk')->references('idProduto')->on('tb_produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_produto_carrinho');
    }
}
