<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('rutinas.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string|max:255',
        'duracion' => 'required|integer',
        'nivel' => 'required|string',
        'objetivo' => 'required|string|max:255',
    ]);

    // Guardar los datos en la base de datos
    Rutina::create($request->all());

    // Redirigir al usuario con un mensaje de éxito
    return view('rutinas.almacenada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rutina $rutina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rutina $rutina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rutina $rutina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rutina $rutina)
    {
        //
    }
}
