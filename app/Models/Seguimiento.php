<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;

    protected $fillable = ['medidas_inicial', 'medidas_final', 'fecha', 'comentarios', 'progreso'];
}
