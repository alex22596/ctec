<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'administrador';
    protected $fillable = ['datos', 'fecha', 'administrador_nombre_usuario'];

    public function administrador(){
        return $this->belongsTo(Administrador::Class);
    }
}
