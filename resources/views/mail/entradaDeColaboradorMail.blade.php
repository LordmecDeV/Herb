@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;"> Bem-Vindo {{{$entradaDecolaborador['nome']}}}</h2>
    <br>
    <p>Olá {{{$entradaDecolaborador['nome']}}}! Seja bem vindo!</p>
    <br>
    <p>Agora você faz parte da TRIPULAÇÃO ZARPO!</p>
    <br>
    <p>Para saber mais sobre a nossa empresa e ter acesso às informações importantes como regras, chamados para suporte, historia do Zarpo entre outros, acesse os links abaixo:</p>
    <br>
    <p>+ Link para nossa ZarpoNet: <a href=" https://net.zarpo.com.br">Clique aqui!</a></p>
    <br>
    <p>+ Link para abrir um chamado T.I: <a href="https://net.zarpo.com.br/criacao-de-chamados/">Clique aqui!</a></p>
    <br>
    <p>+ Regras da casa: <a href="https://net.zarpo.com.br/politicas/">Clique aqui!</a></p>
    <br>
    <p>Seus acessos:</p>
    <br>
    <p>Gmail:</p>
    <br>
    <p>-Email: {{{$entradaDecolaborador['email']}}}</p>
    <p>-Senha: zarpozarpo2022</p>
    <br>
    <p>Skype:</p>
    <br>
    <p>-Email: {{{$entradaDecolaborador['email']}}}</p>
    <p>-Senha: zarpozarpo2022</p>
    <p>Atualize a sua senha do skype após o primeiro acesso por favor!</p>
    <br>
        <ul>
            <li>Email: {{{$entradaDecolaborador['email']}}}</li>
            <li>Data de sua entrada: {{{$entradaDecolaborador['data_de_entrada']}}}</li>
            <li>Id do computador: {{{$entradaDecolaborador['id_do_pc']}}}</li>
            <li>Recebeu mouse: {{{$entradaDecolaborador['mouse']}}}</li>
            <li>Recebeu teclado: {{{$entradaDecolaborador['teclado']}}}</li>
            <li>Recebeu suporte: {{{$entradaDecolaborador['suporte']}}}</li>
            <li>Recebeu monitor: {{{$entradaDecolaborador['monitor']}}}</li>
            <li>Departamento: {{{$entradaDecolaborador['departamento']}}}</li>
        </ul>
@endcomponent