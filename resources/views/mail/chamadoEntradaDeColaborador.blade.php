@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$chamadoEntrada['titulo']}}} </h2>
    <br>
    <p>1 - Criar uma conta no Google Workspace para o novo colaborador, usando o primeiro nome e último nome.</p>
    <br>
    <p>2 - Criar uma conta no Skype para o colaborador se comunicar internamente</p>
    <br>
    <p>3 - Verificar disponibilade de maquina em estoque</p>
    <br>
    <p>3 - Criar colaborador no chamado e atualizar inventario</p>
    <br>
    <p>4 - O chamado de entrada de colaborador deve ser respondido 3 dias antes da entrada do colaborador, e os acessos entregues com 3 dias de antecedência</p>
    <br>
    <ul>
        <li>Solicitado por: {{{$chamadoEntrada['colaboradorID']}}} </li>
        <li>Nome do colaborador: {{{$chamadoEntrada['nome_colaborador']}}} </li>
        <li>Departamento: {{{$chamadoEntrada['dpto']}}} </li>
        <li>Acessos: {{{$chamadoEntrada['sistemas']}}} </li>
        <li>Data de entrada: {{{$chamadoEntrada['data_de_entrada']}}} </li>
        <li>Grupos de email: {{{$chamadoEntrada['grupos_email']}}} </li>
        <li>Observação: {{{$chamadoEntrada['observacao']}}} </li>
    </ul>
@endcomponent