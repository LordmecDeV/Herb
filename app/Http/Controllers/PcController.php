<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Pc;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Exports\PcExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Gate;

class PcController extends Controller
{
    public function cadastroPc() 
    {
        if(Gate::allows(ability:'colaborador-view')){ 
        return view('pc.cadastroPc');
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }

    public function store(Request $request) 
    {
        if(Gate::allows(ability:'colaborador-view')){ 
        $cadastroPc = $request->all();
        Pc::create($cadastroPc);

        return redirect('/computadores');
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
            $verTodos = DB::table('pc')->where('id_do_pc', '=', $buscar)->paginate($qtd);
        }else{
            $verTodos = DB::table('pc')->paginate($qtd);
        }

        $pcStatus = DB::table('pc')->select('status')->get();
        
    return view('pc.index', compact('verTodos', 'pcStatus'));
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }

    public function show($id)
    {
        if(Gate::allows(ability:'colaborador-view')){ 
        $verDados = Pc::find($id);
        return view('pc.show', compact('verDados'));
        }else{
            abort(code: 403, message: 'Access denied');
        }
    }
    public function delete($id){
        if(Gate::allows(ability:'colaborador-view')){     
    $deletarDados = Pc::find($id);
    return view('pc.delete', compact('deletarDados'));
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }
    
    public function destroy($id){
        if(Gate::allows(ability:'colaborador-view')){
        Pc::find($id)->delete();
        return redirect()->route('todosComputadores');
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }

    public function edit($id){
        if(Gate::allows(ability:'colaborador-view')){
        $attDados = Pc::find($id);
        return view('pc.update', compact('attDados'));
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }
    
    public function update(Request $request, $id)
    { 
        if(Gate::allows(ability:'colaborador-view')){
        $attDados = Pc::find($id);
        $dados = $request->all();
        $attDados->update($dados);
        return redirect()->route('todosComputadores');
        }else{
            abort(code: 403, message: 'Access denied');
        }
    }

        public function export() 
        {
            if(Gate::allows(ability:'colaborador-view')){
            return Excel::download(new PcExport, 'Ṕcs.xlsx');
        }else{
            abort(code: 403, message: 'Access denied');
        }
    }  
        /**
        * @return \Illuminate\Support\Collection
        */    
}
