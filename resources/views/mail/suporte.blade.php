@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$suporte['titulo']}}}</h2>
    <br>
    <p>Um suporte foi solicitado por {{{$suporte['colaboradorID']}}}!</p>
    <br>
    <p>Problema: {{{$suporte['problema']}}}</p>
    <br>
    <p>Departamento: {{{$suporte['dpto']}}}</p>
    <br>
    <p>Prioridade: {{{$suporte['prioridade']}}}</p>
    <br>
    <p>Resumo do problema: {{{$suporte['observacao']}}}</p>
    <br>
@endcomponent