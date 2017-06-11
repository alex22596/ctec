<?php

namespace CTEC\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'administrador';
    //protected $fillable = ['nombre_usuario', 'password'];


}
