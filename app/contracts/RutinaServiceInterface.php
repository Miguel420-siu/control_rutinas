<?php

namespace App\contracts;

use App\Models\Rutina;

interface RutinaServiceInterface
{
    public function listarRutina();
    public function crearRutina(array $data);
    public function obtenerRutina(int $id);
    public function actualizaRutina(Rutina $rutina, array $data);
    public function desactivarRutina(Rutina $rutina);
}