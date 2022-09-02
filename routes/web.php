<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaColaboradorCadastroController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BaseConhecimentoController;


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
    return view('colaboradores.EntradaColaboradorCadastro');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Routes Herb
//Routes Colaboradores


Route::get('/colaborador/entradaColaboradorCadastro',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'formEntrada'])->name('formEntrada');
Route::get('/colaboradores',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'index'])->name('todosColaboradores');
Route::get('/colaboradores/{id}/verDados',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'show'])->name('verDadosColaborador');
Route::get('/colaboradores/{id}/deletarColaborador',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'delete'])->name('deletar');
Route::post('/entradaColaboradorCadastro', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'store'])->name('criarColaborador');
Route::get('/colaborador/{id}/attColaborador', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'edit'])->name('atualizarColaborador');
Route::put('/atualizarColaborador/{id}', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'update'])->name('updateColaborador');
Route::delete('/deleteColaborador/{id}', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'destroy'])->name('destroyColaborador'); 

//Routes Pc

Route::get('/computador/cadastroComputador',[App\Http\Controllers\PcController::class, 'cadastroPc'])->name('cadastroPc');
Route::post('/cadastroComputador', [App\Http\Controllers\PcController::class, 'store'])->name('criarPc');
Route::get('/computadores',[App\Http\Controllers\PcController::class, 'index'])->name('todosComputadores');
Route::get('/computadores/{id}/verDados',[App\Http\Controllers\PcController::class, 'show'])->name('verDadosComputador');
Route::get('/computador/{id}/deletarComputador',[App\Http\Controllers\PcController::class, 'delete'])->name('deletarComputador');
Route::delete('/deleteComputador/{id}', [App\Http\Controllers\PcController::class, 'destroy'])->name('destroyComputador');
Route::get('/computador/{id}/attComputador', [App\Http\Controllers\PcController::class, 'edit'])->name('atualizarComputador');
Route::put('/atualizarComputador/{id}', [App\Http\Controllers\PcController::class, 'update'])->name('updateComputador');

//Routes  base do conhecimento
Route::get('/basedoconhecimento/conteudos',[App\Http\Controllers\BaseConhecimentoController::class, 'cadastroConteudo'])->name('cadastroConteudo');
Route::post('/cadastroConteudo', [App\Http\Controllers\BaseConhecimentoController::class, 'store'])->name('criarConteudo');
Route::get('/conteudos',[App\Http\Controllers\BaseConhecimentoController::class, 'index'])->name('todosConteudos');
Route::get('/conteudo/{id}/verConteudo',[App\Http\Controllers\BaseConhecimentoController::class, 'show'])->name('verConteudo');

//Routes dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//Export & Import
Route::get('colaboradores-export', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'export'])->name('users.export');
Route::post('colaboradores-import',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'import'])->name('users.import');

//Export pcs
Route::get('pcs-export', [App\Http\Controllers\PcController::class, 'export'])->name('pcs.export');