@extends('suporte.layout')
@section('content')

<div class="parent">
        <div class="div1">
        
<div class="row mb-4 mt-2">
        @foreach($verTodos as $dadoschamado)
        @if($dadoschamado->status === 'Criado')
        <div class="col-sm-6">
            <div class="card mt-3 border-danger  shadow-lg p-2 bg-body rounded" style="background-color: #ae101e;background-image: linear-gradient(90deg, #ae101e 0%, #d6494b 55%, #b90827 100%);">
            <div class="card-body text-light">
                <h5 class="card-title fw-bold">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text ">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="btn btn-dark bg-dark bg-gradient">
                Ver chamado
                </a>
            </div>
            </div>
        </div>
        @elseif($dadoschamado->status === 'Em andamento')
        <div class="col-sm-6">
            <div class="card mt-3 border-secondary text-light shadow-lg p-2 bg-body rounded" style="background-color: #453e3f;background-image: linear-gradient(90deg, #453e3f 0%, #686262 55%, #504848 100%);">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="btn btn-dark bg-dark bg-gradient">
                Ver chamado
                </a>
            </div>
            </div>
        </div>
        @else
        <div class="col-sm-6">
            <div class="card mt-3 border-primary shadow-lg p-2 bg-body rounded" style="background-color: #0d43d6;background-image: linear-gradient(90deg, #0d43d6 0%, #688ee8 55%, #2346c9 100%);">
            <div class="card-body text-light">
                <h5 class="card-title fw-bold">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="btn btn-dark bg-dark bg-gradient ">
                Ver chamado
                </a>
            </div>
            </div>
        </div>
        @endif
        @endforeach
        </div>
        <div class="row">
        <div class="col">
        {{$verTodos->links()}}
        </div>
        </div>
        
    </div>
    </div>

@endsection