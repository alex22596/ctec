<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reporte';
    protected $fillable = ['datos', 'fecha'];

}
