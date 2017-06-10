<?php

namespace CTEC\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'administrador';
    //protected $fillable = ['nombre_usuario', 'password'];

    public function reportes(){
        return $this->hasMany(Reporte::Class);
    }

    public function instalaciones(){
        return $this->hasMany(Instalacion::Class);
    }

    public function evaluaciones(){
        return $this->hasMany(Evaluacion::Class);
    }
}
