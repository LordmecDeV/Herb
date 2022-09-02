<?php

namespace App\Exports;

use App\Models\EntradaDeColaboradorCadastro;
use Maatwebsite\Excel\Concerns\FromCollection;

class ColaboradoresExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EntradaDeColaboradorCadastro::select("id", "nome", "email","departamento", "data_de_entrada", "marca_notebook","id_do_pc", "observacao", "mouse","teclado", "suporte", "monitor")->get();
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["id", "nome", "email","departamento", "data_de_entrada", "marca_notebook","id_do_pc", "observacao", "mouse","teclado", "suporte", "monitor"];
    }
}
