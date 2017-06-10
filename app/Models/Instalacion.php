<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    protected $table = "instalacion";
    protected $fillable = ['nombre', 'administrador_nombre_usuario'];

    public function admnistrador(){
        return $this->belongsTo(Administrador::Class);
    }
    public function servicios(){
        return $this->hasMany(Servicio::Class);
    }
    public function evaluaciones(){
        return $this->hasMany(Evaluacion::Class);
    }
}
