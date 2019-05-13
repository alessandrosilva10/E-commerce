<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $fillable = ['endereco', 'complemento', 'dataRegistro'];
    protected $guarded = ['idEndereco'];
    protected $table = 'tb_endereco';
}
