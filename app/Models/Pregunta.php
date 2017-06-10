<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = "pregunta";
    protected $fillable = ['contenido', 'tipo', 'evaluacion_id'];

    public function evaluacion(){
        return $this->belongsTo(Evaluacion::Class);
    }
    public function respuestas(){
        return $this->hasMany(Respuesta::Class);
    }
}
