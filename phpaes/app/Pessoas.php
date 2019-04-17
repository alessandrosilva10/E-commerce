<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    
    protected $fillable = ['nome', 'email', 'telefone', 'celular', 'dataRegistro'];
    protected $guarded = ['idPessoa'];
    protected $table = ['tb_pessoa'];
}
