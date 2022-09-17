@extends('colaboradores.layout')
@section('content')

<form method="post" class="row g-3 shadow p-3 mb-4 mt-3 bg-body rounded"  action="{{ route('destroyUser', ['id' => $deletarDados->id]) }}">
    <input type="hidden" name="_method" value="DELETE">    
    {{ csrf_field() }}
                    <h4>Tem certeza que deseja deletar este colaborador?</h4>

        <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Email: {{$deletarDados->email}}</li>
                                    <li class="list-group-item">Nome: {{$deletarDados->name}}</li>

            </ul>
            <button class="btn btn-danger"  type="submit" >Remover</button></a>
            <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>

@endsection