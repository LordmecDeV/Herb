@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$admissao['titulo']}}}</h2>
    <br>
    <p>Um chamado de admissão foi solicitado por:{{{$admissao['colaboradorID']}}}!</p>
    <br>
    <p>Nome do colaborador: {{{$admissao['nome_colaborador']}}}</p>
    <br>
    <p>Departamento: {{{$admissao['dpto']}}}</p>
    <br>
    <p>Regime: {{{$admissao['regime']}}}</p>
    <br>
    <p>Cargo: {{{$admissao['cargo_atual']}}}</p>
    <br>
    <p>Telefone para contato: {{{$admissao['telefone']}}}</p>
    <br>
    <p>Horario de entrada/saida: {{{$admissao['horario_trabalho']}}}</p>
    <br>
    <p>Salário fixo: {{{$admissao['sal_atual']}}}</p>
    <br>
    <p>Data de inicio: {{{$admissao['data_de_entrada']}}}</p>
    <br>
    <p>Observação: {{{$admissao['observacao']}}}</p>
    <br>
@endcomponent