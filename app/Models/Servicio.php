<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicio";
    protected $fillable = ['nombre', 'instalacion_id'];

    public function instalacion(){
        return $this->belongsTo(Instalacion::Class);
    }
}
