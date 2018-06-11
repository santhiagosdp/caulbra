<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emitidos extends Model
{
	//
    protected $fillable = [
        'nome', 'cpf','id','logCert','serial',
    ];
}

