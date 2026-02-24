<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'login']);
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'logout']);
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'mencoes']);
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'recuperarSenha']);
Route::get('/aluno/recuperarRA', [App\Http\Controllers\Aluno::class, 'recuperarRA']);
Route::get('/professor/login', [App\Http\Controllers\Professor::class, 'login']);
Route::get('/professor/logout', [App\Http\Controllers\Professor::class, 'logout']);
Route::get('/professor/alunos', [App\Http\Controllers\Professor::class, 'alunos']);
Route::get('/professor/recuperarSenha', [App\Http\Controllers\Professor::class, 'recuperarSenha']);
Route::get('/professor/recuperarRA', [App\Http\Controllers\Professor::class, 'recuperarRA']);
