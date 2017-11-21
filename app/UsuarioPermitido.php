<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioPermitido extends Model
{
    protected $fillable = [
        'nombreUsu','permiso'
    ];


    public function permitido() {
        return $this->permitido;
    }
}


