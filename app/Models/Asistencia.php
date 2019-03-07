<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'tipo',
        'fecha',
        'curso_id',
        'estudiante_id',
    ];
    
    public function estudiante()
    {
        return $this->belongsTo('App\Models\Estudiante');
    }

    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }
}
