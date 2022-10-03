@component('mail::message')
<a href="https://imgbb.com/"><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$feriasMail['titulo']}}}</h2>
    <br>
    <p>Um chamado de ferias foi solicitado por:{{{$feriasMail['colaboradorID']}}}!</p>
    <br>
    <p>Nome do colaborador: {{{$feriasMail['nome_colaborador']}}}</p>
    <br>
    <p>Departamento: {{{$feriasMail['dpto']}}}</p>
    <br>
    <p>Data inicial: {{{$feriasMail['data_inicial']}}}</p>
    <br>
    <p>Data Final: {{{$feriasMail['data_final']}}}</p>
    <br>
    <p>Período: {{{$feriasMail['periodo']}}}</p>
    <br>
    <p>Observação: {{{$feriasMail['observacao']}}}</p>
    <br>
@endcomponent