<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoCarrinhos extends Model
{
    protected $fillable = ['dataRemovido', 'dataRegistrado'];
    protected $guarded = ['idProdCar'];
    protected $table = ['tb_produto_carrinho']
}
