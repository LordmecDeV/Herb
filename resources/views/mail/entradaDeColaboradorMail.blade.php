@component('mail::message')
<a href="https://ibb.co/z8H3P7N"><img src="https://i.ibb.co/6vJKD1N/lohoherb.png" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" alt="lohoherb" border="0"></a>
    <h2 style="text-align:center;"> Bem-Vindo {{{$entradaDecolaborador['nome']}}}</h2>
        <ul >
            <li>Email: {{{$entradaDecolaborador['email']}}}</li>
            <li>Data de sua entrada: {{{$entradaDecolaborador['data_de_entrada']}}}</li>
            <li>Id do computador: {{{$entradaDecolaborador['id_do_pc']}}}</li>
            <li>Recebeu mouse: {{{$entradaDecolaborador['mouse']}}}</li>
            <li>Recebeu teclado: {{{$entradaDecolaborador['teclado']}}}</li>
            <li>Recebeu suporte: {{{$entradaDecolaborador['suporte']}}}</li>
            <li>Recebeu monitor: {{{$entradaDecolaborador['monitor']}}}</li>
            <li>Departamento: {{{$entradaDecolaborador['departamento']}}}</li>
            <li>Observação: {{{$entradaDecolaborador['observacao']}}}</li>
        </ul>
@endcomponent