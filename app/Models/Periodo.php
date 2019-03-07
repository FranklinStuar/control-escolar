<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = ['nombre'];

    public function cursos()
    {
        return $this->hasMany('App\Models\Curso');
    }

}
