<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntradaDeColaboradorCadastro extends Model
{
   protected $table = 'entrada_de_colaborador_cadastro';
   public $timestamps = true;
   protected $fillable = ["nome", "observacao", "departamento", "preco_pc", "email", "data_de_entrada", "marca_notebook", "id_do_pc", "ram", "processador", "memoria", "mouse", "teclado", "suporte", "monitor", "created_at", "updated_at"];

}