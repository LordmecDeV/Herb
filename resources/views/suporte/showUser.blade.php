@extends('suporte.layout')
@section('content')
                                <div class="parent">
                                        <div class="div1">
                                        @if($verDados['titulo'] === 'Entrada De Colaborador')
                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                    <h3 style="text-align:center;">Entrada de Colaborador - CH{{$verDados->id}}</h3>
                                    <li class="list-group-item">Tipo de chamado: {{$verDados->titulo}}</li>    
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Departamento: {{$verDados->dpto}}</li>
                                    <li class="list-group-item">Nome do colaborador: {{$verDados->nome_colaborador}}</li>
                                    <li class="list-group-item">Data de entrada: {{$verDados->data_de_entrada}}</li>
                                    <li class="list-group-item">Sistemas: {{$verDados->sistemas}}</li>
                                    <li class="list-group-item">Grupo de email: {{$verDados->grupos_email}}</li>
                                    <li class="list-group-item">VPN: {{$verDados->vpn}}</li>
                                    <li class="list-group-item">Solicitado por: {{$verDados->colaboradorID}}</li>
                                    <li class="list-group-item">Observação: {{$verDados->observacao}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-4">Voltar</a>   
                                    </ul>
@elseif($verDados['titulo'] === 'Saída De Colaborador')
                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                    <h3 style="text-align:center;">Saida de Colaborador - CH{{$verDados->id}}</h3>
                                    <li class="list-group-item">Tipo de chamado: {{$verDados->titulo}}</li>    
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Departamento: {{$verDados->dpto}}</li>
                                    <li class="list-group-item">Nome do colaborador: {{$verDados->nome_colaborador}}</li>
                                    <li class="list-group-item">Data do pedido de demissão: {{$verDados->data_do_pedido_de_demissao}}</li>
                                    <li class="list-group-item">Data do ultimo dia do colaborador: {{$verDados->data_do_ultimo_dia_do_colaborador}}</li>
                                    <li class="list-group-item">Aviso previo: {{$verDados->aviso_previo}}</li>
                                    <li class="list-group-item">Solicitado por: {{$verDados->colaboradorID}}</li>
                                    <li class="list-group-item">Anexo:<img src="{{ asset('imagens/'.$verDados->file_path) }}" class=" img-thumbnail rounded float-end zoom" style=""></li>
                                    <li class="list-group-item">Tipo de desligamento: {{$verDados->tipo_desligamento}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-4">Voltar</a>   
                                    </ul>
@elseif($verDados['titulo'] === 'Movimentação de colaborador')
                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                    <h3 style="text-align:center;">Movimentação de colaborador - CH{{$verDados->id}}</h3>
                                    <li class="list-group-item">Tipo de chamado: {{$verDados->titulo}}</li>
                                    <li class="list-group-item">Nome do colaborador: {{$verDados->nome_colaborador}}</li>    
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Departamento Atual: {{$verDados->dpto}}</li>
                                    <li class="list-group-item">Departamento Atual: {{$verDados->dpto_proposto}}</li>
                                    <li class="list-group-item">Cargo atual: {{$verDados->cargo_atual}}</li>
                                    <li class="list-group-item">Data da movimentação: {{$verDados->data_movimentacao}}</li>
                                    <li class="list-group-item">Tipo de movimentação: {{$verDados->tipo_movimentacao}}</li>
                                    <li class="list-group-item">Salario atual: {{$verDados->sal_atual}}</li>
                                    <li class="list-group-item">Salario atual: {{$verDados->sal_proposto}}</li>
                                    <li class="list-group-item">Anexo(Aprovação do diretor):<img src="{{ asset('imagens/'.$verDados->file_path) }}" class=" img-thumbnail rounded float-end zoom" style=""></li>
                                    <li class="list-group-item">Porcentagem do aumento: %{{$verDados->porcentagem_aumento}}</li>
                                    <li class="list-group-item">Adicional de cargo de confiança: {{$verDados->cargo_confianca}}</li>
                                    <li class="list-group-item">Memória de Cálculo para comissão/bônus : {{$verDados->comissao}}</li>
                                    <li class="list-group-item">Recorrencia do bonus/comissão: {{$verDados->recorrencia_comissao}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-4">Voltar</a>   
                                        </ul>
@elseif($verDados['titulo'] === 'Férias')
                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                    <h3 style="text-align:center;">Férias - CH{{$verDados->id}}</h3>
                                    <li class="list-group-item">Tipo de chamado: {{$verDados->titulo}}</li>
                                    <li class="list-group-item">Nome do colaborador: {{$verDados->nome_colaborador}}</li>    
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Departamento Atual: {{$verDados->dpto}}</li>
                                    <li class="list-group-item">Data inicial: {{$verDados->data_inicial}}</li>
                                    <li class="list-group-item">Data final: {{$verDados->data_final}}</li>
                                    <li class="list-group-item">Periodo: {{$verDados->periodo}}</li>
                                    <li class="list-group-item">Anexo:<img src="{{ asset('imagens/'.$verDados->file_path) }}" class=" img-thumbnail rounded float-end zoom" style=""></li>
                                    <li class="list-group-item">Observação: {{$verDados->observacao}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-4">Voltar</a>   
                                    </ul>
@elseif($verDados['titulo'] === 'Benefícios')
                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                    <h3 style="text-align:center;">Benefícios - CH{{$verDados->id}}</h3>
                                    <li class="list-group-item">Tipo de chamado: {{$verDados->titulo}}</li>
                                    <li class="list-group-item">Nome do colaborador: {{$verDados->nome_colaborador}}</li>    
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Departamento Atual: {{$verDados->dpto}}</li>
                                    <li class="list-group-item">Tipo de beneficio: {{$verDados->tipo_beneficio}}</li>
                                    <li class="list-group-item">Plano de saúde/odontologico: {{$verDados->plan_odonto_saude}}</li>
                                    <li class="list-group-item">Anexo:<img src="{{ asset('imagens/'.$verDados->file_path) }}" class=" img-thumbnail rounded float-end zoom" style=""></li>
                                    <li class="list-group-item">Observação: {{$verDados->observacao}}</li>
                                    <li class="list-group-item">Grau de parentesco: {{$verDados->grau_parentesco}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-4">Voltar</a>   
                                    </ul>
@elseif($verDados['titulo'] === 'Admissão')
                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                    <h3 style="text-align:center;">Admissão - CH{{$verDados->id}}</h3>
                                    <li class="list-group-item">Tipo de chamado: {{$verDados->titulo}}</li>
                                    <li class="list-group-item">Nome do colaborador: {{$verDados->nome_colaborador}}</li>    
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Departamento: {{$verDados->dpto}}</li>
                                    <li class="list-group-item">Telefone para contato(contratado): {{$verDados->telefone}}</li>
                                    <li class="list-group-item">Salário fixo: {{$verDados->sal_atual}}</li>
                                    <li class="list-group-item">Data de Inicio: {{$verDados->data_de_entrada}}</li>
                                    <li class="list-group-item">Horário de trabalho: {{$verDados->horario_trabalho}}</li>
                                    <li class="list-group-item">Anexo:<img src="{{ asset('imagens/'.$verDados->file_path) }}" class=" img-thumbnail rounded float-end zoom" style=""></li>
                                    <li class="list-group-item">Observação: {{$verDados->observacao}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-4">Voltar</a>   
                                    </ul>
@else
                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                    <h3 style="text-align:center;">Suporte - CH{{$verDados->id}}</h3>
                                    <li class="list-group-item">Tipo de chamado: {{$verDados->titulo}}</li>    
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Departamento: {{$verDados->dpto}}</li>
                                    <li class="list-group-item">Problema: {{$verDados->problema}}</li>
                                    <li class="list-group-item">Resumo do colaborador: {{$verDados->observacao}}</li>
                                    <li class="list-group-item">Atribuido: {{$verDados->atribuido}}</li>
                                    <li class="list-group-item">Prioridade: {{$verDados->prioridade}}</li>
                                    <li class="list-group-item">Solicitado por: {{$verDados->colaboradorID}}</li>
                                    <li class="list-group-item">Criado: {{$verDados->created_at}}</li>
                                    <li class="list-group-item">Atualizado: {{$verDados->updated_at}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-4">Voltar</a>   
                                        </ul>
@endif
@endsection