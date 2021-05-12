<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TejedorController;
use App\Http\Controllers\TejidoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('Tejedores', [TejedorController::class,'index'])->name('tejedor.index');
Route::get('Tejedores/crear', [TejedorController::class,'crear'])->name('tejedor.crear');
Route::post('Tejedores', [TejedorController::class,'store'])->name('tejedor.store');
Route::get('Tejedores/{tejedor}', [TejedorController::class,'show'])->name('tejedor.show');
Route::get('Tejedores/{tejedor}/edit', [TejedorController::class,'edit'])->name('tejedor.edit');
Route::put('Tejedores/{tejedor}', [TejedorController::class,'update'])->name('tejedor.update');


Route::get('Tejidos', [TejidoController::class,'index'])->name('tejido.index');
Route::get('Tejidos2', [TejidoController::class,'index2'])->name('tejido.index2');
Route::get('Tejidos/crear', [TejidoController::class,'crear'])->name('tejido.crear');
Route::post('Tejidos', [TejidoController::class,'store'])->name('tejido.store');
Route::get('Tejidos/{tejido}', [TejidoController::class,'show'])->name('tejido.show');
Route::get('Tejidos/{tejido}/edit', [TejidoController::class,'edit'])->name('tejido.edit');
Route::put('Tejidos/{tejido}', [TejidoController::class,'update'])->name('tejido.update');
Route::get('Tejidos/{tejido}/delete', [TejidoController::class,'delete'])->name('tejido.delete');
Route::get('Tejidos/{tejido}/like', [TejidoController::class,'like'])->name('tejido.like');


Route::get('Usuarios', [UsuarioController::class,'index'])->name('usuario.index');
Route::get('Usuarios/crear', [UsuarioController::class,'crear'])->name('usuario.crear');
Route::post('Usuarios', [UsuarioController::class,'store'])->name('usuario.store');
Route::get('Usuarios/{usuario}', [UsuarioController::class,'show'])->name('usuario.show');
Route::get('Usuarios/{usuario}/edit', [UsuarioController::class,'edit'])->name('usuario.edit');
Route::put('Usuarios/{usuario}', [UsuarioController::class,'update'])->name('usuario.update');
Route::get('Usuarios/{usuario}/delete', [UsuarioController::class,'delete'])->name('usuario.delete');



Route::get('Roles', [RolController::class,'index'])->name('rol.index');
Route::get('Roles/crear', [RolController::class,'crear'])->name('rol.crear');
Route::post('Roles', [RolController::class,'store'])->name('rol.store');
Route::get('Roles/{rol}', [RolController::class,'show'])->name('rol.show');
Route::get('Roles/{rol}/edit', [RolController::class,'edit'])->name('rol.edit');
Route::put('Roles/{rol}', [RolController::class,'update'])->name('rol.update');

