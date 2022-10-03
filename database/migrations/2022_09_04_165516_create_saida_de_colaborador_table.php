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
        Schema::create('saida_de_colaborador', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('nome_colaborador')->nullable();
            $table->string('dpto')->nullable();
            $table->string('data_do_pedido_de_demissao')->nullable();
            $table->string('data_do_ultimo_dia_do_colaborador')->nullable();
            $table->string('data_de_entrada')->nullable();
            $table->string('sistemas')->nullable();
            $table->string('grupos_email')->nullable();
            $table->string('vpn')->nullable();
            $table->string('aviso_previo')->nullable();
            $table->string('file_path')->nullable();
            $table->string('tipo_desligamento')->nullable();
            $table->string('observacao')->nullable();
            $table->string('problema')->nullable();
            $table->string('prioridade')->nullable();
            $table->string('atribuido')->nullable();
            $table->string('status')->nullable();
            $table->string('colaboradorID')->nullable();
            $table->string('dpto_proposto')->nullable();
            $table->string('cargo_atual')->nullable();
            $table->string('data_movimentacao')->nullable();
            $table->string('cargo_proposto')->nullable();
            $table->string('tipo_movimentacao')->nullable();
            $table->string('sal_atual')->nullable();
            $table->string('sal_proposto')->nullable();
            $table->string('porcentagem_aumento')->nullable();
            $table->string('cargo_confianca')->nullable();
            $table->string('comissao')->nullable();
            $table->string('recorrencia_comissao')->nullable();
            $table->string('data_inicial')->nullable();
            $table->string('data_final')->nullable();
            $table->string('periodo')->nullable();
            $table->string('tipo_beneficio')->nullable();
            $table->string('plan_odonto_saude')->nullable();
            $table->string('grau_parentesco')->nullable();
            $table->string('email_pessoal')->nullable();
            $table->string('telefone')->nullable();
            $table->string('regime')->nullable();
            $table->string('horario_trabalho')->nullable();
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
        Schema::dropIfExists('saida_de_colaborador');
    }
};
