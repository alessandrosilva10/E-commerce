<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['nome', 'descricao', 'imagem', 'preco', 'dataRegistro', 'idCategoriaFk'];
    protected $guarded = ['idProduto'];
    protected $table = 'tb_produto';
    public $timestamps = false;

    public function ca(){
        return $this->belongsTo('App\Categorias', 'idCategoriaFk', 'idCategoria');
    }
}
