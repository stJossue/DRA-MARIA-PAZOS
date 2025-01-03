<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\panel\MisVisController;

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

Route::get('/',[PaginaController::class, 'Inicio']);
Route::get('/admin',[PaginaController::class, 'paneldecontrol']);

//Mision y Vision
Route::get('/MisVis',[MisVisController::class,'index']);
Route::get('/CreateMisVis', [MisVisController::class,'create']);
Route::post('/storeMisVis', [MisVisController::class,'store']);
