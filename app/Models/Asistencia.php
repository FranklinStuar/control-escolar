<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'tipo',
        'fecha',
        'dia_asistencia_id',
        'estudiante_id',
        'observacion',
    ];
    
    public function estudiante()
    {
        return $this->belongsTo('App\Models\Estudiante');
    }

    public function diaAsistencia()
    {
        return $this->belongsTo('App\Models\DiaAsistencia');
    }
}
