<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntradaDeColaboradorCadastro;
use App\Models\Pc;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
    
        $pc = DB::table('pc')->select('preco')->get();
        $colaboradores = DB::table('entrada_de_colaborador_cadastro')->select('id')->count();
        $qtnPc = DB::table('pc')->select('id')->count();
        $pcColaborador = DB::table('pc')->select('id_do_pc', 'status')->where('status', '=', 'Disponivel')->get();
        $total_preco_pc = $pc->sum('preco');
        

        return view('dashboard.dashboard', compact('total_preco_pc', 'colaboradores', 'pcColaborador', 'qtnPc'));
    }

}