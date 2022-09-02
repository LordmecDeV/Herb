@extends('colaboradores.layout')
@section('content')

    <form method="post" class="row g-3 shadow p-3 mb-4 mt-3 bg-body rounded"  action="{{ route('destroyComputador', ['id' => $deletarDados->id]) }}">
    <input type="hidden" name="_method" value="DELETE">    
    {{ csrf_field() }}
                    <h4>Tem certeza que deseja deletar este computador?</h4>

        <ul class="list-group list-group-flush">
                                    <li class="list-group-item">ID: {{$deletarDados->id}}</li>
                                    <li class="list-group-item">ID Notebook: {{$deletarDados->id_do_pc}}</li>
                                    <li class="list-group-item">RAM: {{$deletarDados->ram}}</li>
                                    <li class="list-group-item">Memoria: {{$deletarDados->memoria}}</li>
                                    <li class="list-group-item">Processadpr: {{$deletarDados->processador}}</li>
                                    <li class="list-group-item">Sistema operacional: {{$deletarDados->sistema_operacional}}</li>
                                    <li class="list-group-item">Preço:R$ {{$deletarDados->preco}}</li>
            </ul>
            <button class="btn btn-danger"  type="submit" >Remover</button></a>
            <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>

@endsection