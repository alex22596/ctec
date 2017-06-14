<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = ['correo'];
}
