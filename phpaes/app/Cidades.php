<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $fillable = ['descricao'];
    protected $guarded = ['idCidade', 'idEstado'];
    protected $table = ['tb_cidade'];
}
