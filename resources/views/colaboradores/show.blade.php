@extends('colaboradores.layout')
@section('content')

                                    <ul class="list-group list-group-flush shadow p-3 mb-4 mt-3 bg-body rounded">
                                        <h3 style="text-align:center;">Dados do colaborador</h3>
                                    <li class="list-group-item">ID: {{$verDados->id}}</li>
                                    <li class="list-group-item">Nome: {{$verDados->nome}}</li>
                                    <li class="list-group-item">Departamento: {{$verDados->departamento}}</li>
                                    <li class="list-group-item">Email: {{$verDados->email}}</li>
                                    <li class="list-group-item">Data de Entrada: {{$verDados->data_de_entrada}}</li>
                                    <li class="list-group-item">ID Notebook: {{$verDados->id_do_pc}}</li>
                                    <li class="list-group-item">Mouse: {{$verDados->mouse}}</li>
                                    <li class="list-group-item">Teclado: {{$verDados->teclado}}</li>
                                    <li class="list-group-item">Monitor: {{$verDados->monitor}}</li>
                                    <li class="list-group-item">Observação: {{$verDados->observacao}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>  
                                        </ul>
                                         

@endsection