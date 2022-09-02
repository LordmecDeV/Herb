<?php

namespace App\Exports;

use App\Models\Pc;
use Maatwebsite\Excel\Concerns\FromCollection;

class PcExport implements FromCollection
{
   /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pc::select("id", "marca", "ram","memoria","processador", "id_do_pc", "sistema_operacional","status", "preco")->get();
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["id", "marca", "ram", "memoria", "processador", "id_do_pc", "sistema_operacional","status", "preco"];
    }
}
