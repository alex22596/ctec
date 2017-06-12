<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class ServiciosDefault extends Model
{
  protected $table = "servicios_default";
  protected $fillable = ['id','nombre'];
}
