<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $fillable = [
        'asumto',
        'mensaje',
        'representante_id'
    ];

    public function representante()
    {
        return $this->belongsTo('App\Models\Representante');
    }
    
}
