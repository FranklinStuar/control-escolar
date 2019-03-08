<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'creditos',
        'curso_id',
    ];
    
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }
    
    public function horarios()
    {
        return $this->belongsToMany('App\Models\Horario');
    }
    
    public function grupoNotas()
    {
        return $this->hasMany('App\Models\GrupoNota');
    }
    
    public function docentes()
    {
        return $this->belongsToMany('App\Models\Docente','docente_materia');
    }

    public function promedioNota(){
        return 0;
    }

}
