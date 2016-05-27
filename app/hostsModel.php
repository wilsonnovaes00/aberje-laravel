<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hostsModel extends Model
{

    protected $fillable = [
        'nome', 'ramal', 'host','telefone','email','aniversario'
    ];

}


