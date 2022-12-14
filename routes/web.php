<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaColaboradorCadastroController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BaseConhecimentoController;
use App\Http\Controllers\SaidaDeColaboradorController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;


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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register.login');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
//Route::get('login', 'LoginController@index');
Route::get('{provider}/callback',[App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);
Route::get('login/{provider}',[App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);

  
//Routes Herb


//Routes Colaboradores
Route::group(['middleware' => 'auth'], function () {
Route::get('/colaborador/entradaColaboradorCadastro',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'formEntrada'])->name('formEntrada');
Route::get('/colaboradores',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'index'])->name('todosColaboradores');
Route::get('/colaboradores/{id}/verDados',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'show'])->name('verDadosColaborador');
Route::get('/colaboradores/{id}/deletarColaborador',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'delete'])->name('deletar');
Route::post('/entradaColaboradorCadastro', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'store'])->name('criarColaborador');
Route::get('/colaborador/{id}/attColaborador', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'edit'])->name('atualizarColaborador');
Route::put('/atualizarColaborador/{id}', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'update'])->name('updateColaborador');
Route::delete('/deleteColaborador/{id}', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'destroy'])->name('destroyColaborador'); 


// Routes controle de usuarios

Route::get('todosUsuarios', [AuthController::class, 'allUser'])->name('all');
Route::get('/Usuario/{id}/deletarUsuario', [AuthController::class, 'delete'])->name('deletarUsuario');
Route::delete('/deleteUser/{id}', [AuthController::class, 'destroy'])->name('destroyUser');
Route::get('/criarUsuario', [AuthController::class, 'criarUsuario'])->name('criarUsuario');
Route::post('/criarColaborador', [AuthController::class, 'store'])->name('criarColaborador');


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

//Routes chamados
Route::get('suporte/abrirChamado',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamado'])->name('chamados');
Route::post('/criarChamadoSaidaDeColaborador', [App\Http\Controllers\SaidaDeColaboradorController::class, 'store'])->name('criarChamadoSaidaDeColaborador');
Route::post('/criarChamadoEntradaDeColaborador', [App\Http\Controllers\SaidaDeColaboradorController::class, 'storeEntrada'])->name('entrada');
Route::get('suporte/abrirChamado/entradaDeColaborador',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoEntradaDeColaborador'])->name('entradadecolaborador');
Route::post('/criarChamadoSuporte', [App\Http\Controllers\SaidaDeColaboradorController::class, 'storeChamado'])->name('criar');
Route::get('suporte',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoSuporte'])->name('suportecolaborador');
Route::get('chamados',[App\Http\Controllers\SaidaDeColaboradorController::class, 'index'])->name('todosChamados');
Route::get('/chamados/{id}/verChamado',[App\Http\Controllers\SaidaDeColaboradorController::class, 'show'])->name('verChamado');
Route::get('/chamados/{id}/attChamados', [App\Http\Controllers\SaidaDeColaboradorController::class, 'edit'])->name('atualizarChamado');
Route::put('/attChamados/{id}', [App\Http\Controllers\SaidaDeColaboradorController::class, 'update'])->name('updateChamado');
Route::get('/home', [App\Http\Controllers\SaidaDeColaboradorController::class, 'home'])->name('home');
Route::get('/meusChamados/{id}', [App\Http\Controllers\SaidaDeColaboradorController::class, 'indexUser'])->name('indexUser');
Route::get('/dadosChamado/{id}', [App\Http\Controllers\SaidaDeColaboradorController::class, 'showChamadoUser'])->name('showUser');
Route::get('/deletarChamado/{id}', [App\Http\Controllers\SaidaDeColaboradorController::class, 'deleteChamadoUser'])->name('deleteChamadoUser');
Route::get('/chamadoMovimentacaoColaborador',[App\Http\Controllers\SaidaDeColaboradorController::class, 'chamadoMovimentacaoColaborador'])->name('movimentacao');
Route::post('/criarChamadoMovimentacaoColaborador',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoMovimentacao'])->name('movimentacaoColaborador');
Route::get('/homeDpto', [App\Http\Controllers\SaidaDeColaboradorController::class, 'homeDpto'])->name('homeDpto');
Route::get('/feriasChamado', [App\Http\Controllers\SaidaDeColaboradorController::class, 'ferias'])->name('feriasChamado');
Route::post('/criarChamadoFerias',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoFerias'])->name('abrirChamadoFerias');
Route::post('/abrirBeneficios',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoBeneficios'])->name('beneficios');
Route::get('/beneficios', [App\Http\Controllers\SaidaDeColaboradorController::class, 'beneficios'])->name('Abrirbeneficios');
Route::get('/chamadoEntradaDeColaborador', [App\Http\Controllers\SaidaDeColaboradorController::class, 'entradaDeColaboradorMenu'])->name('entradaDeColaboradorMenu');
Route::post('/abrirChamadoAdmissao',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoAdmissao'])->name('admissao');
Route::get('/chamadoFinanceiro', [App\Http\Controllers\SaidaDeColaboradorController::class, 'financeiroMenu'])->name('financeiroMenu');
Route::get('/chamadoReembolso', [App\Http\Controllers\SaidaDeColaboradorController::class, 'reembolso'])->name('reembolso');
Route::post('/abrirChamadoAdiantamentoReembolso',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoAdiantamentoReembolso'])->name('adiantamentoReembolso');
Route::post('/abrirChamadoReembolso',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoReembolso'])->name('chamadoReembolso');
Route::get('/chamadoSolicitacaoDeCompra', [App\Http\Controllers\SaidaDeColaboradorController::class, 'compra'])->name('solicitacaoDeCompra');
Route::post('/abrirChamadoSolicitacaoDeCompra',[App\Http\Controllers\SaidaDeColaboradorController::class, 'abrirChamadoSolicitacaoDeCompra'])->name('compra');
Route::post('/atualizarChamado/{id}',[App\Http\Controllers\SaidaDeColaboradorController::class, 'comentarioChamado'])->name('solicitarRevisao');

//Routes dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//Export & Import
Route::get('colaboradores-export', [App\Http\Controllers\EntradaColaboradorCadastroController::class, 'export'])->name('users.export');
Route::post('colaboradores-import',[App\Http\Controllers\EntradaColaboradorCadastroController::class, 'import'])->name('users.import');

//Export pcs
Route::get('pcs-export', [App\Http\Controllers\PcController::class, 'export'])->name('pcs.export');});