@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$adiantamentoReembolso['titulo']}}}</h2>
    <br>
    <p>Um chamado de Adiantamento de reembolso foi solicitado por:{{{$adiantamentoReembolso['colaboradorID']}}}!</p>
    <br>
    <p>Nome do colaborador: {{{$adiantamentoReembolso['nome_colaborador']}}}</p>
    <br>
    <p>Departamento: {{{$adiantamentoReembolso['dpto']}}}</p>
    <br>
    <p>Valor total do reembolso: {{{$adiantamentoReembolso['valor_total']}}}</p>
    <br>
    <p>Tipo de pagamento: {{{$adiantamentoReembolso['tipo_pagamento']}}}</p>
    <br>
    <p>Banco: {{{$adiantamentoReembolso['banco']}}}</p>
    <br>
    <p>Favorecido: {{{$adiantamentoReembolso['favorecido']}}}</p>
    <br>
    <p>Tipo de conta: {{{$adiantamentoReembolso['tipo_conta']}}}</p>
    <br>
    <p>Agencia: {{{$adiantamentoReembolso['agencia']}}}</p>
    <br>
    <p>Conta: {{{$adiantamentoReembolso['conta']}}}</p>
    <br>
    <p>CPF/CNPJ: {{{$adiantamentoReembolso['cpf_cnpj']}}}</p>
    <br>
    <p>Motivo do reembolso: {{{$adiantamentoReembolso['observacao']}}}</p>
    <br>
@endcomponent