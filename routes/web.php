<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/funcionarios', [FuncionariosController::class, 'index'])->middleware('auth.basic');
Route::get('/funcionarios/novo', [FuncionariosController::class, 'create'])->middleware('auth.basic');
Route::post('/funcionarios/novo', [FuncionariosController::class, 'store'])->middleware('auth.basic');

Route::get('/funcionarios/delete/{id}', [FuncionariosController::class, 'destroy'])->middleware('auth.basic');
Route::get('/funcionarios/editar/{id}', [FuncionariosController::class, 'edit'])->middleware('auth.basic');
Route::post('/funcionarios/editar/', [FuncionariosController::class, 'update'])->middleware('auth.basic');
