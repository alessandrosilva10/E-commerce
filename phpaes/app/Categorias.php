<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = ['descricao', 'dataRegistro'];
    protected $guarded = ['idCategoria'];
    protected $table = 'tb_categoria';
    
    public $timestamps = false;

    public function produtos(){
        return $this->hasMany('App\Produtos', 'idProdutoFk', 'idProduto');
    }
}