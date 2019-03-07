<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'monto',
        'fecha',
        'representante_id',
    ];

    public function representante()
    {
        return $this->belongsTo('App\Models\Representante');
    }
    
}
