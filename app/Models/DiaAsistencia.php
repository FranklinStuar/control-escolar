<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaAsistencia extends Model
{
    protected $fillable = [
        'fecha',
        'curso_id'
    ];
    
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }

    public function asistencias()
    {
        return $this->hasMany('App\Models\Asistencia');
    }
}
