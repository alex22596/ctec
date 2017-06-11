<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "evaluacion";
    protected $fillable = ['nombre'];


    public function instalacion(){
        return $this->belongsTo(Instalacion::Class);
    }
    public function preguntas(){
        return $this->hasMany(Pregunta::Class);
    }
}
