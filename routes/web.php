<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

/*------------ Rota para Index ------------------------ */
Route::get('/', [HomeController::class,'index'])->name('index');

/*------------ Rota para o perfil ------------------------ */
Route::get('/editarPerfil', [HomeController::class,'editPerfil'])->name('editarPerfil');

/*------------ Rotas do administrador ------------------ */
Route::get('/menu', [AdminController::class,'menu'])->name('menu');
Route::get('/log', [AdminController::class,'log'])->name('log');
Route::get('/editarAtribuicao', [AdminController::class,'atribuicao'])->name('editarAtribuicao');
Route::get('/editarPermissao', [AdminController::class,'permissao'])->name('editarPermissao');
Route::get('/backup', [AdminController::class,'backup'])->name('backup');
Route::get('/cadastrarUsuario', [AdminController::class,'cadastro'])->name('cadastrarUsuario');
Route::get('/removerUsuario', [AdminController::class,'remocao'])->name('removerUsuario');


/*------------ Rota para Paciente------------------------ */
Route::get('/listaPacientes', [HomeController::class,'listaPacientes'])->name('pacientes');




/*------------ Rotas do enfermeiro chefe -------------*/



/*------------ Rotas do enfermeiro -------------------*/



/*------------ Rotas do estagiário -------------------*/