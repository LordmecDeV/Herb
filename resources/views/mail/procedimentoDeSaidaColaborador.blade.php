@component('mail::message')
<a href="https://imgbb.com/"><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$saidaDecolaborador['titulo']}}} - {{{$saidaDecolaborador['nome_colaborador']}}} </h2>
    <br>
    <p>Chamado de saida de colaborador aberto!</p>
    <br>
    <p>Solicitado por :{{{$saidaDecolaborador['colaboradorID']}}}</p>
    <br>
    <h4 style="text-align:center;">Atenção tripulante!!!</h4>
    <ul>
    <li> Os acessos as ferramentas de trabalho do tripulante que esta desembarcando vão ser bloqueados após sua saida.</li>
    <br>
    <li> Iremos criar um aliás do email do tripulante que esta desembarcando para sua conta.</li>
    <br>
    <li> Todos documentos do Google Drive vão ser transferidos para sua propriedade no Drive.</li>
    <br> 
    <li> Todos acessos são excluidos no dia posterior a saída do colaborador, caso exista alguma necessidade especial, entre em contato com a equipe de suporte técnico!</li>
    <br>
    </ul> 
@endcomponent