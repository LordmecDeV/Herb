@component('mail::message')
<a ><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;display: block; margin-left:auto;margin-right:auto;" border="0"></a>
    <h2 style="text-align:center;">{{{$movimentacao['titulo']}}}</h2>
    <br>
    <p>Um chamado de movimentação de colaborador foi solicitado por:{{{$movimentacao['colaboradorID']}}}!</p>
    <br>
    <p>Nome do colaborador: {{{$movimentacao['nome_colaborador']}}}</p>
    <br>
    <p>Departamento atual: {{{$movimentacao['dpto']}}}</p>
    <br>
    <p>Departamento proposto: {{{$movimentacao['dpto_proposto']}}}</p>
    <br>
    <p>Salário atual: {{{$movimentacao['sal_atual']}}}</p>
    <br>
    <p>Salário proposto: {{{$movimentacao['sal_proposto']}}}</p>
    <br>
    <p>Cargo atual: {{{$movimentacao['cargo_atual']}}}</p>
    <br>
    <p>Cargo proposto: {{{$movimentacao['cargo_proposto']}}}</p>
    <br>
    <p>Tipo de movimentação: {{{$movimentacao['tipo_movimentacao']}}}</p>
    <br>
    <p>Data da movimentação: {{{$movimentacao['data_movimentacao']}}}</p>
    <br>
    <p>% de aumento: {{{$movimentacao['porcentagem_aumento']}}}</p>
    <br>
    <p>Adicional de cargo de confiança: {{{$movimentacao['cargo_confianca']}}}</p>
    <br>
    <p>Comissão/Bônus: {{{$movimentacao['comissao']}}}</p>
    <br>
    <p>Recorrência da comissão: {{{$movimentacao['recorrencia_comissao']}}}</p>
    <br>
    <p>Observação: {{{$movimentacao['observacao']}}}</p>
    <br>
@endcomponent