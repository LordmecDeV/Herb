<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\BaseConhecimento;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class BaseConhecimentoController extends Controller
{
    public function cadastroConteudo() 
    {   
        return view('baseconhecimento.criarconteudo');
    }


    public function store(Request $request) 
    {
        $cadastroConteudo = $request->all();
        BaseConhecimento::create($cadastroConteudo);
       

        return redirect('/conteudos', );
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
            $verTodos = DB::table('base_conhecimento')->where('titulo', '=', $buscar)->paginate($qtd);
        }else{
            $verTodos = DB::table('base_conhecimento')->paginate($qtd);
        }
        
       
        
    return view('baseconhecimento.index', compact('verTodos'));
    }

    public function show($id){
        
        $verDados = BaseConhecimento::find($id);
        return view('baseconhecimento.show', compact('verDados'));
        }
    
    public function delete($id){
        
    $deletarDados = EntradaDeColaboradorCadastro::find($id);
    return view('baseconhecimento.show', compact('deletarDados'));
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
}        