<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boletos extends Model
{
    protected $fillable = [
    "NombreE","FechaE","CostoE","TipoE"
    ];
}
