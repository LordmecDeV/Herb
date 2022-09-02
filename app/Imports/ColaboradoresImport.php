<?php

namespace App\Imports;


use App\Models\EntradaDeColaboradorCadastro;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ColaboradoresImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EntradaDeColaboradorCadastro([
            'nome'     => $row['nome'],
            'email'    => $row['email'],
            'departamento'    => $row['departamento'],
            'data_de_entrada'    => $row['data_de_entrada'],
            'marca_notebook'    => $row['marca_notebook'],
            'id_do_pc'    => $row['id_do_pc'],
            'observacao'    => $row['observacao'],
            'mouse'    => $row['mouse'],
            'teclado'    => $row['teclado'], 
            'suporte'    => $row['suporte'], 
            'monitor'    => $row['monitor'], 
        ]);
    }
}
