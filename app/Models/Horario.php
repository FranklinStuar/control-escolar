<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'dia',
        'inicio',
        'fin',
    ];
    
    public function materias()
    {
        return $this->belongsToMany('App\Models\Materia');
    }
    
}
