<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = [
        'codigo',
        'lugar_studio',
        'curriculum_vitae',
        'antecedentes_penales',
        'persona_id',
    ];

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona');
    }

    public function materias()
    {
        return $this->belongsToMany('App\Models\Materia','docente_materia');
    }

}
