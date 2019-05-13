<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['nome', 'descricao', 'imagem', 'preco', 'dataRegistro'];
    protected $guarded = ['idProduto'];
    protected $table = 'tb_produto';
    public $timestamps = false;
}
