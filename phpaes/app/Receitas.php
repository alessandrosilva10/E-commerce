<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    //
    protected $fillable = ['titulo', 'preparo', 'ingredientes', 'imagem', 'aprovado'];
    protected $guarded = ['idReceita'];
    protected $table = 'tb_receita';
}
