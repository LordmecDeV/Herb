@extends('colaboradores.layout')
@section('content')

                                    <ul class="list-group list-group-flush shadow p-3 mb-4 bg-body rounded mt-3">
                                        <h3 style="text-align:center;">Dados do computador</h3>
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">ID Notebook: {{$verDados->id_do_pc}}</li>
                                    <li class="list-group-item">Sistema operacional: {{$verDados->sistema_operacional}}</li>
                                    <li class="list-group-item">RAM: {{$verDados->ram}}</li>
                                    <li class="list-group-item">Memoria: {{$verDados->memoria}}</li>
                                    <li class="list-group-item">Processador: {{$verDados->processador}}</li>
                                    <li class="list-group-item">Preço: R${{$verDados->preco}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>  
                                        </ul>
                                         

@endsection