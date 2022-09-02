<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
   protected $table = 'pc';
   public $timestamps = true;
   protected $fillable = ["id_do_pc", "preco", "status", "marca", "ram", "memoria", "processador", "sistema_operacional", "created_at", "updated_at"];

}