<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoConsulta extends Model
{
    protected $table = 'TipoConsulta';
    protected $fillable = [
        'Nombre','Descripcion',
    ];
}
