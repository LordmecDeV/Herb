<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntradaDeColaboradorCadastro;
use App\Models\Pc;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        if(Gate::allows(ability:'colaborador-view')){
        $pc = DB::table('pc')->select('preco')->get();
        $colaboradores = DB::table('entrada_de_colaborador_cadastro')->select('id')->count();
        $qtnPc = DB::table('pc')->select('id')->count();
        $pcColaborador = DB::table('pc')->select('id_do_pc', 'status')->where('status', '=', 'Disponivel')->get();
        $total_preco_pc = $pc->sum('preco');
        $statuspc = DB::table('pc')->select('status')->where('status', '=', 'Disponivel')->count();
        $statuspcEmUso = DB::table('pc')->select('status')->where('status', '=', 'Em uso')->count();
        $statuspcManutencao = DB::table('pc')->select('status')->where('status', '=', 'Manutenção')->count();
        
        $statusChamado = DB::table('saida_de_colaborador')->select('status')->where('status', '=', 'Criado')->count();
        $statusEmAndamento = DB::table('saida_de_colaborador')->select('status')->where('status', '=', 'Em andamento')->count();
        $statusConcluido = DB::table('saida_de_colaborador')->select('status')->where('status', '=', 'Concluido')->count();


        return view('dashboard.dashboard', compact('statusChamado','statusEmAndamento','statusConcluido','total_preco_pc','statuspcEmUso','statuspcManutencao','colaboradores', 'pcColaborador', 'statuspc', 'qtnPc'));
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }

}