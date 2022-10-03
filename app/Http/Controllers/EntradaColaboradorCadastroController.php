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

class EntradaColaboradorCadastroController extends Controller
{
    public function formEntrada() 
    {
        $pcColaborador = DB::table('pc')->select('id_do_pc', 'status')->where('status', '=', 'Disponivel')->get();
        return view('colaboradores.EntradaColaboradorCadastro', compact('pcColaborador'));
    }


    public function store(Request $request) 
    {
        $cadastroColaborador = $request->all();
        EntradaDeColaboradorCadastro::create($cadastroColaborador);

        $entradaDecolaborador = $cadastroColaborador;
        
        \Mail::to(['johnny.almeida@zarpo.com.br'] )->send(new entradaDeColaboradorMail($entradaDecolaborador));

        return redirect('/colaboradores', );
    }

    public function index(Request $request) 
    {
        $qtd = $request['qtd'] ?: 6;
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
    }

    public function show($id){
        
        $verDados = EntradaDeColaboradorCadastro::find($id);
        return view('colaboradores.show', compact('verDados'));
        }
    
    public function delete($id){
        
    $deletarDados = EntradaDeColaboradorCadastro::find($id);
    return view('colaboradores.delete', compact('deletarDados'));
    }
    
    public function destroy($id){
    
        EntradaDeColaboradorCadastro::find($id)->delete();
        return redirect()->route('todosColaboradores');
    }

    public function edit($id){
        
        $attDados = EntradaDeColaboradorCadastro::find($id);
        $pcColaborador = DB::table('pc')->select('id_do_pc')->get();
        return view('colaboradores.update', compact('attDados', 'pcColaborador'));
        }
    
    public function update(Request $request, $id){ 
        $attDados = EntradaDeColaboradorCadastro::find($id);
        $dados = $request->all();
        $attDados->update($dados);
        return redirect()->route('todosColaboradores');
        }

        public function export() 
        {
            return Excel::download(new ColaboradoresExport, 'colaboradores.xlsx');
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
