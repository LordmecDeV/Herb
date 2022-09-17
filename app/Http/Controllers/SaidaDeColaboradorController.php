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
        \Mail::to('johnny.almeida@zarpo.com.br')->send(new entradaDeColaboradorChamadoMail($chamadoEntrada));
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
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new saidaDeColaboradormail($saidaDecolaborador));
        }else{
            SaidaDeColaborador::create($abrirChamado);
            $saidaDecolaborador = $abrirChamado;
            \Mail::to('johnny.almeida@zarpo.com.br')->send(new saidaDeColaboradormail($saidaDecolaborador));
        }

        return redirect('/chamados');
    }

    public function abrirChamadoSuporte() 
    {
        return view('suporte.criarChamadoSuporte');
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
        \Mail::to('johnny.almeida@zarpo.com.br')->send(new SuporteMail($suporte));
        return redirect('/chamados');
    }

   

    public function index(Request $request) 
    {
        $qtd = $request['qtd'] ?: 4;
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
        
        $attDados = SaidaDeColaborador::find($id);
        return view('suporte.updateSaida', compact('attDados'));
        }
    
    public function update(Request $request, $id){ 
        $attDados = SaidaDeColaborador::find($id);
        $dados = $request->all();
        $attDados->update($dados);
        $atualizar = $dados;
        \Mail::to('johnny.almeida@zarpo.com.br')->send(new updateChamadoMail($atualizar));
        return redirect()->route('todosChamados');
        }


}