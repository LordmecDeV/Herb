@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$atualizar['titulo']}}} - CH{{{$atualizar['id']}}} </h2>
    <br>
    <p>Status: {{{$atualizar['status']}}}</p>
    <br>
    <p>Atribuido: {{{$atualizar['atribuido']}}}</p>
    <br>
    <p>Observação: {{{$atualizar['observacao']}}}</p>
    <br>
@endcomponent