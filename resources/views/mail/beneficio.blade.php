@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$beneficio['titulo']}}}</h2>
    <br>
    <p>Um chamado de beneficio foi solicitado por:{{{$beneficio['colaboradorID']}}}!</p>
    <br>
    <p>Nome do colaborador: {{{$beneficio['nome_colaborador']}}}</p>
    <br>
    <p>Departamento: {{{$beneficio['dpto']}}}</p>
    <br>
    <p>Tipo de beneficio: {{{$beneficio['tipo_beneficio']}}}</p>
    <br>
    <p>Grau de parentesco: {{{$beneficio['grau_parentesco']}}}</p>
    <br>
    <p>Observação: {{{$beneficio['observacao']}}}</p>
    <br>
@endcomponent