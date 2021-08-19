<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\gastosController;

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
Route::resource('/gastos', gastosController::class);

//agregar 
Route::get('/gastos/{id}/confirm', [\App\Http\controllers\gastosController::class, 'confirmId']);
//Route::get('/gastos/{id}/detalles', [])
Route::get('/gastos/{id}/detalles/create', [App\Http\controllers\detallesController::class, 'create']);
Route::post('/gastos/{id}/detalles', [App\Http\controllers\detallesController::class, 'store']);