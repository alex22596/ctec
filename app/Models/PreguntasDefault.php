<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntasDefault extends Model
{
    protected $table = "preguntas_default";
    protected $fillable = ['id','contenido', 'tipo'];
}
