@component('mail::message')
<a href="https://imgbb.com/"><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$reembolso['titulo']}}}</h2>
    <br>
    <p>Um chamado de Reembolso foi solicitado por: {{{$reembolso['colaboradorID']}}}!</p>
    <br>
    <p>Nome do colaborador: {{{$reembolso['nome_colaborador']}}}</p>
    <br>
    <p>Departamento: {{{$reembolso['dpto']}}}</p>
    <br>
    <p>Valor total do reembolso: {{{$reembolso['valor_total']}}}</p>
    <br>
    <p>Tipo de pagamento: {{{$reembolso['tipo_pagamento']}}}</p>
    <br>
    <p>Banco: {{{$reembolso['banco']}}}</p>
    <br>
    <p>Favorecido: {{{$reembolso['favorecido']}}}</p>
    <br>
    <p>Tipo de conta: {{{$reembolso['tipo_conta']}}}</p>
    <br>
    <p>Agencia: {{{$reembolso['agencia']}}}</p>
    <br>
    <p>Conta: {{{$reembolso['conta']}}}</p>
    <br>
    <p>CPF/CNPJ: {{{$reembolso['cpf_cnpj']}}}</p>
    <br>
    <p>Motivo do reembolso: {{{$reembolso['observacao']}}}</p>
    <br>
@endcomponent