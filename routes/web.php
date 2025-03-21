<?php

use App\Http\Controllers\RutinaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ruta', function(){
//     return "Hola mundo";
// });
// Route::get('/ruta/post', function(){
//     return "POST ok";
// });
Route::get('/rutina/create', [RutinaController::class, 'create']);
Route::post('/rutina',[RutinaController::class,'store']);