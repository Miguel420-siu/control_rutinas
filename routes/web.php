<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ruta', function(){
    return "Hola mundo";
});
Route::get('/ruta/post', function(){
    return "POST ok";
});
Route::get('/rutinas', function(){
    return view('rutinas');
});