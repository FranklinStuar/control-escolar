<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'nota',
        'observación',
        'grupo_nota_id',
        'estudiante_id',
    ];
    
    public function estudiante()
    {
        return $this->belongsTo('App\Models\Estudiante');
    }
    
    public function grupoNota()
    {
        return $this->belongsTo('App\Models\GrupoNota');
    }
    
}
