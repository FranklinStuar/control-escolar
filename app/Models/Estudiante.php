<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'persona_id',
        'representante_id',
        'curso_id',
        'nacimiento',
    ];
    
    public function persona()
    {
        return $this->belongsTo('App\Models\Persona');
    }

    public function representante()
    {
        return $this->belongsTo('App\Models\Representante');
    }

    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }

    public function asistencias()
    {
        return $this->hasMany('App\Models\Asistencia');
    }

    public function notas()
    {
        return $this->hasMany('App\Models\Nota');
    }

}
