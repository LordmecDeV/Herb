@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">Um colaborador acaba de enviar uma mensagem referente ao CH-{{{$mensagem['id']}}}</h2>
    <br>
    <p>Mensagem do colaborador: {{{$mensagem['mensagem']}}}</p>
    <br>
@endcomponent