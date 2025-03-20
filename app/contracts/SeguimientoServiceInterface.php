<?php

namespace App\contracts;

use App\Models\Seguimiento;

interface SeguimientoServiceInterface
{
    public function listarSeguimiento();
    public function crearSeguimiento(array $data);
    public function obtenerSeguimiento(int $id);
    public function actualizarSeguimiento(Seguimiento $seguimiento, array $data);
    public function desactivarSeguimiento(Seguimiento $seguimiento);
}