<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\EntradaDeColaboradorCadastro;
use App\Models\Pc;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Exports\ColaboradoresExport;
use App\Imports\ColaboradoresImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\entradaDeColaboradorMail;
use Illuminate\Support\Facades\Gate;

class EntradaColaboradorCadastroController extends Controller
{
    public function formEntrada() 
    {
        if(Gate::allows(ability:'colaborador-view')){
        $pcColaborador = DB::table('pc')->select('id_do_pc', 'status')->where('status', '=', 'Disponivel')->get();
        return view('colaboradores.EntradaColaboradorCadastro', compact('pcColaborador'));
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }


    public function store(Request $request) 
    {
        if(Gate::allows(ability:'colaborador-view')){
        $cadastroColaborador = $request->all();
        EntradaDeColaboradorCadastro::create($cadastroColaborador);
        $entradaDecolaborador = $cadastroColaborador;
        $title = "Bem vindo ao Zarpo ".$entradaDecolaborador['nome'];
        \Mail::to(['dpto.pessoal@zarpo.com.br', $entradaDecolaborador['email'], 'johnny.almeida@zarpo.com.br'] )->send(new entradaDeColaboradorMail($entradaDecolaborador, $title));
        return redirect('/colaboradores', );
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }

    public function index(Request $request) 
    {
        if(Gate::allows(ability:'colaborador-view')){
        $qtd = $request['qtd'] ?: 10;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        if($buscar){
            $verTodos = DB::table('entrada_de_colaborador_cadastro')->where('nome', '=', $buscar)->paginate($qtd);
        }else{
            $verTodos = DB::table('entrada_de_colaborador_cadastro')->paginate($qtd);
        }
    return view('colaboradores.index', compact('verTodos'));
        }else{
            abort(code: 403, message: 'Access denied');
        }
    }

    public function show($id)
    {
        if(Gate::allows(ability:'colaborador-view')){
        $verDados = EntradaDeColaboradorCadastro::find($id);
        return view('colaboradores.show', compact('verDados'));
        }else{
            abort(code: 403, message: 'Access denied');
        }
    }
    
    public function delete($id)
    {
    if(Gate::allows(ability:'colaborador-view')){
    $deletarDados = EntradaDeColaboradorCadastro::find($id);
    return view('colaboradores.delete', compact('deletarDados'));
        }else{
            abort(code: 403, message: 'Access denied');
        }
    }
    
    public function destroy($id)
    {
        if(Gate::allows(ability:'colaborador-view')){
        EntradaDeColaboradorCadastro::find($id)->delete();
        return redirect()->route('todosColaboradores');
        }else{
            abort(code: 403, message: 'Access denied');
    }
    }

    public function edit($id)
    {
        if(Gate::allows(ability:'colaborador-view')){
        $attDados = EntradaDeColaboradorCadastro::find($id);
        $pcColaborador = DB::table('pc')->select('id_do_pc')->get();
        return view('colaboradores.update', compact('attDados', 'pcColaborador'));
        }else{
            abort(code: 403, message: 'Access denied');
    }
    }
    public function update(Request $request, $id)
    {
        if(Gate::allows(ability:'colaborador-view')){ 
        $attDados = EntradaDeColaboradorCadastro::find($id);
        $dados = $request->all();
        $attDados->update($dados);
        return redirect()->route('todosColaboradores');
        }else{
            abort(code: 403, message: 'Access denied');
        }
    }

        public function export() 
        {
            if(Gate::allows(ability:'colaborador-view')){
            return Excel::download(new ColaboradoresExport, 'colaboradores.xlsx');
        }else{
            abort(code: 403, message: 'Access denied');
        }
        }
           
        /**
        * @return \Illuminate\Support\Collection
        */
        public function import() 
        {
            Excel::import(new ColaboradoresImport,request()->file('file'));
                   
            return back();
        }     
}
