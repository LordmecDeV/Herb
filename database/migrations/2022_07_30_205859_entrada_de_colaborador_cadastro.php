<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_de_colaborador_cadastro', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('departamento')->nullable();
            $table->string('email')->nullable();
            $table->string('data_de_entrada')->nullable();
            $table->string('marca_notebook')->nullable();
            $table->string('id_do_pc')->nullable();
            $table->string('observacao')->nullable();
            $table->string('mouse')->nullable();
            $table->string('teclado')->nullable();
            $table->string('suporte')->nullable();
            $table->string('monitor')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entrada_de_colaborador_cadastro');
    }
};
