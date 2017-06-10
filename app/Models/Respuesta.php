<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = "respuesta";
    protected $fillable = ['tipo', 'pregunta_id'];

    public function pregunta(){
        return $this->belongsTo(Pregunta::Class);
    }
}
