<?php

namespace App\contracts;

use App\Models\Usuario;

interface UsuarioServiceInterface
{
    public function listarUsuario();
    public function crearUsuario(array $data);
    public function obtenerUsuario(int $id);
    public function actualizarUsuario(Usuario $usuario, array $data);
    public function desactivarUsuario(Usuario $usuario);
}