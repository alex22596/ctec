<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "evaluacion";
    protected $fillable = ['nombre', 'administrador_nombre_usuario', 'instalacion_id'];

    public function administrador(){
        return $this->belongsTo(Administrador::Class);
    }
    public function instalacion(){
        return $this->belongsTo(Instalacion::Class);
    }
    public function preguntas(){
        return $this->hasMany(Pregunta::Class);
    }
}
