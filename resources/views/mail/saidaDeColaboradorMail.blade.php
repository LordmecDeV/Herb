@component('mail::message')
<a href="https://imgbb.com/"><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$saidaDecolaborador['titulo']}}}</h2>
    <br>
    <p>Chamado de saida de colaborador aberto!</p>
    <br>
    <p>Solicitado por :{{{$saidaDecolaborador['colaboradorID']}}}</p>
    <br>
    <p>Status:{{{$saidaDecolaborador['status']}}}</p>
    <br>
    <p>Data do pedido de demissão: {{{$saidaDecolaborador['data_do_pedido_de_demissao']}}}</p>
    <br>
    <p>Data do ultimo dia do colaborador: {{{$saidaDecolaborador['data_do_ultimo_dia_do_colaborador']}}}</p>
    <br>
    <p>Aviso prévio: {{{$saidaDecolaborador['aviso_previo']}}}</p>
    <br>
    <p>Tipo de desligamento: {{{$saidaDecolaborador['tipo_delisgamento']}}}</p>
    <br>
    <p>Departamento: {{{$saidaDecolaborador['dpto']}}}</p>
    <br>
    <p>Nome do colaborador: {{{$saidaDecolaborador['nome_colaborador']}}}</p>
@endcomponent