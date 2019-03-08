<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoNota extends Model
{
    protected $fillable = [
        'nombre',
        'observacion',
        'nota_limite',
        'nota_equivalente',
        'fecha',
        'materia_id',
    ];

    public function materia()
    {
        return $this->belongsTo('App\Models\Materia');
    }
    
    public function notas()
    {
        return $this->hasMany('App\Models\Nota');
    }

}
