<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaidaDeColaborador extends Model
{
   protected $table = 'saida_de_colaborador';
   public $timestamps = true;
   protected $fillable = ["nome_colaborador", "colaboradorID", "status", "problema", "prioridade", "atribuido", "dpto","data_do_pedido_de_demissao", "data_do_ultimo_dia_do_colaborador", "aviso_previo", "file_path", "observacao", "created_at", "updated_at", "tipo_desligamento", "data_de_entrada", "sistemas", "grupos_email", "vpn", "titulo"];
}