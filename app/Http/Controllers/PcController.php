<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Pc;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Exports\PcExport;
use Maatwebsite\Excel\Facades\Excel;

class PcController extends Controller
{
    public function cadastroPc() 
    {
        return view('pc.cadastroPc');
    }


    public function store(Request $request) 
    {
        $cadastroPc = $request->all();
        Pc::create($cadastroPc);

        return redirect('/computadores');
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
            $verTodos = DB::table('pc')->where('id_do_pc', '=', $buscar)->paginate($qtd);
        }else{
            $verTodos = DB::table('pc')->paginate($qtd);
        }

        $pcStatus = DB::table('pc')->select('status')->get();
        
    return view('pc.index', compact('verTodos', 'pcStatus'));
    }

    public function show($id){
        
        $verDados = Pc::find($id);
        return view('pc.show', compact('verDados'));
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
        
        $attDados = Pc::find($id);
        return view('pc.update', compact('attDados'));
        }
    
    public function update(Request $request, $id){ 
        $attDados = Pc::find($id);
        $dados = $request->all();
        $attDados->update($dados);
        return redirect()->route('todosComputadores');
        }

        public function export() 
        {
            return Excel::download(new PcExport, 'Ṕcs.xlsx');
        }
           
        /**
        * @return \Illuminate\Support\Collection
        */    
}
