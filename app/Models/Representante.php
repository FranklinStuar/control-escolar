<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $fillable = [
        'persona_id'
    ];

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante');
    }

    public function pagos()
    {
        return $this->hasMany('App\Models\Pago');
    }

    public function notificacions()
    {
        return $this->hasMany('App\Models\Notificacion');
    }

}
