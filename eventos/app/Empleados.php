<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable = [
    "nombre","fechaing","activo","edad","fechana"
    ];
}
