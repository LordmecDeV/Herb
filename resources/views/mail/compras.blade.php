@component('mail::message')
<a href="https://imgbb.com/"><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$compras['titulo']}}}</h2>
    <br>
    <p>Um chamado de Solicitação de compra foi solicitado por:{{{$compras['colaboradorID']}}}!</p>
    <br>
    <p>Nome do colaborador: {{{$compras['nome_colaborador']}}}</p>
    <br>
    <p>Departamento: {{{$compras['dpto']}}}</p>
    <br>
    <p>Produto: {{{$compras['produto']}}}</p>
    <br>
    <p>Valor unitario: {{{$compras['valor_unitario']}}}</p>
    <br>
    <p>Quantidade: {{{$compras['quantidade']}}}</p>
    <br>
    <p>Nivel de urgencia: {{{$compras['urgencia']}}}</p>
    <br>
    <p>Finalidade: {{{$compras['finalidade']}}}</p>
    <br>
    <p>Observação: {{{$compras['observacao']}}}</p>
    <br>
@endcomponent