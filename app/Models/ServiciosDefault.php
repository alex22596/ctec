<?php

namespace CTEC;

use Illuminate\Database\Eloquent\Model;

class ServiciosDefault extends Model
{
    protected $table = "servicios_default";
    protected $fillable = ['nombre'];
}
