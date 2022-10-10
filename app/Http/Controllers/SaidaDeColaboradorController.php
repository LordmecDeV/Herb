<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\SaidaDeColaborador;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Mail\saidaDeColaboradormail;
use App\Mail\updateChamadoMail;
use App\Mail\entradaDeColaboradorChamadoMail;
use App\Mail\SuporteMail;
use App\Mail\saidaDeColaboradorAvisosmail;
use App\Mail\feriasMail;
use App\Mail\beneficioMail;
use App\Mail\movimentacaoColaboradorMail;
use App\Mail\admissaoMail;
use App\Mail\compraMail;
use App\Mail\reembolsoMail;
use App\Mail\adiantamentoReembolsoMail;
use Illuminate\Support\Facades\Gate;

class SaidaDeColaboradorController extends Controller
{
    public function abrirChamado() 
    {
        return view('suporte.criarChamado');
    }

    public function abrirChamadoEntradaDeColaborador() 
    {
        return view('suporte.criarChamadoEntradaDeColaborador');
    }

    public function storeEntrada(Request $request)
    {
        $abrirChamadoEntrada = $request->all();
        SaidaDeColaborador::create($abrirChamadoEntrada);
        $chamadoEntrada = $abrirChamadoEntrada;
        $title = "Solicitação de acessos e equipamentos";
        \Mail::to('johnny.almeida@zarpo.com.br')->send(new entradaDeColaboradorChamadoMail($chamadoEntrada, $title));
        return redirect('/chamados');
    }

    public function store(Request $request) 
    {
        $abrirChamado = $request->all();
        

        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
    
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $saidaDecolaborador = $abrirChamado;
            $title = "Solicitação de saída de colaborador";
            $title2 = "Aviso!!! Leia o procedimento de saida de colaborador";
            \Mail::to($saidaDecolaborador['colaboradorID'])->send(new saidaDeColaboradorAvisosmail($saidaDecolaborador, $title2));
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new saidaDeColaboradormail($saidaDecolaborador, $title));
        }else{
            $title = "Solicitação de saída de colaborador";
            $title2 = "Aviso!!! Leia o procedimento de saida de colaborador";
            SaidaDeColaborador::create($abrirChamado);
            $saidaDecolaborador = $abrirChamado;
            \Mail::to($saidaDecolaborador['colaboradorID'])->send(new saidaDeColaboradorAvisosmail($saidaDecolaborador, $title2));
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new saidaDeColaboradormail($saidaDecolaborador, $title));
        }

        return redirect('/chamados');
    }

    public function abrirChamadoSuporte() 
    {
        return view('suporte.criarChamadoSuporte');
    }

    public function chamadoMovimentacaoColaborador() 
    {
        return view('suporte.movimentacaoColaborador');
    }

    public function abrirChamadoMovimentacao(Request $request) 
    {
        $abrirChamado = $request->all();
        
        
        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $movimentacao = $abrirChamado;
            $title = "Solicitação de movimentação de colaborador";
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new movimentacaoColaboradorMail($movimentacao, $title));
        }else{
            $title = "Solicitação de movimentação de colaborador";
            $movimentacao = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new movimentacaoColaboradorMail($movimentacao, $title));
            SaidaDeColaborador::create($abrirChamado);
            
        }

        return redirect('/chamados');
    }

    public function indexUser($id, Request $request) 
    {
        $user = User::find($id,);
        $todosChamados = SaidaDeColaborador::where('colaboradorID', '=', $user->email)->get();
        $qtd = $request['qtd'] ?: 4;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        if($todosChamados){
            $verTodos = DB::table('saida_de_colaborador')->where('colaboradorID', '=', $user->email)->orderBy('created_at', 'desc')->paginate($qtd);
        }else{
            $verTodos = DB::table('saida_de_colaborador')->where('colaboradorID', '=', $user->email)->orderBy('created_at', 'desc')->paginate($qtd);
        }
        return view('suporte.indexUser', compact('todosChamados', 'verTodos'));
    }

    public function home() 
    {
        return view('suporte.menu');
    }

    public function homeDpto() 
    {
        return view('suporte.menuRecursosHumanos');
    }

    public function ferias() 
    {
        return view('suporte.feriasChamado');
    }

    public function beneficios() 
    {
        return view('suporte.beneficios');
    }

    public function financeiroMenu() 
    {
        return view('suporte.financeiroMenu');
    }

    public function reembolso() 
    {
        return view('suporte.reeembolsoChamado');
    }

    public function entradaDeColaboradorMenu() 
    {
        return view('suporte.entradaDeColaboradorMenu');
    }

    public function compra() 
    {
        return view('suporte.criarChamadoSolicitacaoDeCompra');
    }

    public function abrirChamadoAdmissao(Request $request) 
    { 
        $abrirChamado = $request->all();
        
        
        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $admissao = $abrirChamado;
            $chamadoEntrada = $abrirChamado;
            $title = "Solicitação de admissão";
            $title2 = "Acessos e equipamentos - Entrada de colaborador";
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new entradaDeColaboradorChamadoMail($chamadoEntrada, $title2));
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new admissaoMail($admissao, $title));
        }else{
            $chamadoEntrada = $abrirChamado;
            $title = "Solicitação de admissão";
            $admissao = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new entradaDeColaboradorChamadoMail($chamadoEntrada, $title2));
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new admissaoMail($admissao, $title));
            SaidaDeColaborador::create($abrirChamado);
            
        }

        return redirect('/chamados'); 
    }

    public function abrirChamadoAdiantamentoReembolso(Request $request) 
    { 
        $abrirChamado = $request->all();
        
        
        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $adiantamentoReembolso = $abrirChamado;
            $title = "Solicitação de ".$adiantamentoReembolso['titulo'];
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new adiantamentoReembolsoMail($adiantamentoReembolso, $title));
        }else{
            $title = "Solicitação de ".$adiantamentoReembolso['titulo'];
            $adiantamentoReembolso = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new adiantamentoReembolsoMail($adiantamentoReembolso, $title));
            SaidaDeColaborador::create($abrirChamado);
            
        }

        return redirect('/chamados');
    }

    public function abrirChamadoReembolso(Request $request) 
    { 
        $abrirChamado = $request->all();
        
        
        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $reembolso = $abrirChamado;
            $title = "Solicitação de reembolso";
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new reembolsoMail($reembolso, $title));
        }else{
            $title = "Solicitação de reembolso";
            $reembolso = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new reembolsoMail($reembolso, $title));
            SaidaDeColaborador::create($abrirChamado);
            
        }

        return redirect('/chamados');
    }

    public function abrirChamadoSolicitacaoDeCompra(Request $request) 
    { 
        $abrirChamado = $request->all();
        
        
        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $compras = $abrirChamado;
            $title = "Solicitação de compra";
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new compraMail($compras, $title));
        }else{
            $title = "Solicitação de compra";
            $compras = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new compraMail($compras, $title));
            SaidaDeColaborador::create($abrirChamado);
            
        }

        return redirect('/chamados');
    }

    public function abrirChamadoBeneficios(Request $request) 
    { 
        $abrirChamado = $request->all();
        
        
        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $beneficio = $abrirChamado;
            $title = "Um chamado de beneficio foi solicitado";
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new beneficioMail($beneficio, $title));
        }else{
            $title = "Um chamado de beneficio foi solicitado";
            $beneficio = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new beneficioMail($beneficio, $title));
            SaidaDeColaborador::create($abrirChamado);
            
        }

        return redirect('/chamados'); 
    }

    public function abrirChamadoFerias(Request $request) 
    {
        $abrirChamado = $request->all();
        
        
        if ($request->hasFile('file_path')) { 

            $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png' 
            ]);
            $imageName = time().'.'.$request->file_path->extension();
            $request->file_path->move(public_path('imagens'), $imageName);
            $abrirChamado['file_path'] = $imageName;
            SaidaDeColaborador::create($abrirChamado);
            $feriasMail = $abrirChamado;
            $title = "Solicitação de férias";
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new feriasMail($feriasMail, $title));
            
        }else{
            $title = "Solicitação de férias";
            $feriasMail = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new feriasMail($feriasMail, $title));
            SaidaDeColaborador::create($abrirChamado);
            
        }

        return redirect('/chamados');
    }

    public function showChamadoUser($id) 
    {
        $verDados = SaidaDeColaborador::find($id);
        return view('suporte.showUser', compact('verDados'));
    }


    public function storeChamado(Request $request)
    {
        $abrirChamado = $request->all();
        SaidaDeColaborador::create($abrirChamado);
        $suporte = $abrirChamado;
        $title = "Solicitação de suporte";
        \Mail::to('johnny.almeida@zarpo.com.br')->send(new SuporteMail($suporte, $title));
        return redirect('/chamados');
    }

   

    public function index(Request $request) 
    {
        if(Gate::allows(ability:'colaborador-view')){
        $qtd = $request['qtd'] ?: 6;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        if($buscar){
            $verTodos = DB::table('saida_de_colaborador')->where('nome_do_colaborador', '=', $buscar)->orderBy('created_at', 'desc')->paginate($qtd);
        }else{
            $verTodos = DB::table('saida_de_colaborador')->orderBy('created_at', 'desc')->paginate($qtd);
        }

        
        
    return view('suporte.index', compact('verTodos'));
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }
    

    public function show($id){
        
        $verDados = SaidaDeColaborador::find($id);
        return view('suporte.show', compact('verDados'));
        }
    
    public function delete($id){
        
    $deletarDados = Pc::find($id);
    return view('pc.delete', compact('deletarDados'));
    }
    
    public function destroy($id){
    
        Pc::find($id)->delete();
        return redirect()->route('todosComputadores');
    }

    public function edit($id){
        if(Gate::allows(ability:'colaborador-view')){
        $attDados = SaidaDeColaborador::find($id);
        return view('suporte.updateSaida', compact('attDados'));
        } else{
            abort(code: 403, message: 'Access denied');
        }
        }
    
    public function update(Request $request, $id)
    {
        if(Gate::allows(ability:'colaborador-view')){ 
        $attDados = SaidaDeColaborador::find($id);
        $dados = $request->all();
        $attDados->update($dados);
        $atualizar = $dados;
        $title = "Seu chamado foi atualizado";
        \Mail::to('johnny.almeida@zarpo.com.br')->send(new updateChamadoMail($atualizar, $title));
        return redirect()->route('todosChamados');
        }else{
            abort(code: 403, message: 'Access denied');
        }

    }
}