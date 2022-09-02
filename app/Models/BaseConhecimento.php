<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseConhecimento extends Model
{
   protected $table = 'base_conhecimento';
   public $timestamps = true;
   protected $fillable = ["titulo", "conteudo","created_at", "updated_at"];

}