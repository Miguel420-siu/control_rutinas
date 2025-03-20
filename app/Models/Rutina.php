<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    Use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'duracion', 'nivel', 'objetivo'];
}
