<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonaController;

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

Route::get('/index', function () {
    return view('CRUD.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create',[App\Http\Controllers\PersonaController::class,'create']);
Route::get('/delete',[App\Http\Controllers\PersonaController::class,'delete']);
Route::get('/edit',[App\Http\Controllers\PersonaController::class,'edit']);
Route::resource('CRUD',PersonaController::class);