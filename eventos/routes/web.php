<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/nuevoEvento", function(){
    return view('nuevo');
    });

Route::get("/puntodeventa", function(){
    return view('puntodeventa');
    });

Route::get("/nuevoEmpleado", function(){
    return view('contrato');
    });

Route::get("/puestos", function(){
    return view('Puestos');
    });

Route::get("/eventos","EventosViewController@index");
Route::get("/ventas","VentasViewController@index");



