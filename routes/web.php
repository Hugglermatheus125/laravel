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

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('index');

Route::get('/sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('sobre');
Route::get('/cursos', [App\Http\Controllers\Principal::class, 'cursos'])->name('cursos');
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('contato');

Route::get('/curso/desenvolvimento-de-sistemas', [App\Http\Controllers\Cursos::class, 'desenvolvimentoDeSistemas'])->name('ds');
Route::get('/curso/meio-ambiente', [App\Http\Controllers\Cursos::class, 'meioAmbiente'])->name('ma');
Route::get('/curso/mecatronica', [App\Http\Controllers\Cursos::class, 'mecatronica'])->name('meca');
Route::get('/curso/administracao', [App\Http\Controllers\Cursos::class, 'administracao'])->name('adm');