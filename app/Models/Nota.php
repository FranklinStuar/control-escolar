<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'nota',
        'observacion',
        'grupo_nota_id',
        'estudiante_id',
        'fecha',
    ];
    
    public function estudiante()
    {
        return $this->belongsTo('App\Models\Estudiante');
    }
    
    public function grupoNota()
    {
        return $this->belongsTo('App\Models\GrupoNota');
    }
    
    public function notaReal()
    {
        $nota = $this->nota * $this->grupoNota->nota_equivalente / $this->grupoNota->limite;
        return round($nota,2);
    }
    
}
