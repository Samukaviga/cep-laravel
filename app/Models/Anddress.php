<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anddress extends Model
{   
    protected $fillable = [
        'cep',
        'logradouro',
        'bairro',
        'cidade',
        'uf',
    ];
}
