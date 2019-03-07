<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'periodo_id',
    ];
    
    public function periodo()
    {
        return $this->belongsTo('App\Models\Periodo');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante');
    }

    public function docentes()
    {
        $docentes = collect([]);
        foreach ($this->materias as $materia) {
            foreach ($materia->docentes as $docente) {
                $docentes->push($docente);
            }
        }
        return $docentes->all();
    }

    public function asistencias()
    {
        return $this->hasMany('App\Models\DiaAsistencia');
    }

    public function materias()
    {
        return $this->hasMany('App\Models\Materia');
    }

    public function horarios()
    {
        return $this->hasManyThrough('App\Models\Horario', 'App\Models\Materia');
    }

}
