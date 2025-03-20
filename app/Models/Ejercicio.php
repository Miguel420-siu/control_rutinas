<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    Use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'tipo', 'grupo_muscular', 'equipo'];
}
