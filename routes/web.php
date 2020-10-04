<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pizzas', [App\Http\Controllers\PizzaController::class, 'index']);
Route::post('/pizzas', [App\Http\Controllers\PizzaController::class, 'store']);
Route::get('/pizza/create', [App\Http\Controllers\PizzaController::class, 'create']);
Route::get('/pizza/{id}', [App\Http\Controllers\PizzaController::class, 'show']);
Route::post('/pizza/{id}', [App\Http\Controllers\PizzaController::class, 'update']);
Route::get('/pizza/{id}/edit', [App\Http\Controllers\PizzaController::class, 'edit']);



//Route::get('/student/{id}/edit', [App\Http\Controllers\StudentController::class, "edit"]);
//Route::post('/student/{id}', [App\Http\Controllers\StudentController::class, "update"]);
//Route::get('/student/{id}/delete', [App\Http\Controllers\StudentController::class, "delete"]);