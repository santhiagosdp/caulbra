<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cpftitular extends Model
{
    //
    protected $fillable = [
        'nome', 'email', 'cpf','id',
    ];
}
