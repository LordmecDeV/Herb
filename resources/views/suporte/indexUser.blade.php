@extends('suporte.layout')
@section('content')

<div class="parent">
        <div class="div1">
        
<div class="row mb-4 mt-2">
        @foreach($verTodos as $dadoschamado)
        @if($dadoschamado->status === 'Criado')
        <div class="col-sm-6">
            <div class="card mt-3 border-danger rounded">
            <div class="card-body text-dark">
                <h5 class="card-title fw-bold">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text ">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="btn btn-dark">
                Ver chamado
                </a>
            </div>
            </div>
        </div>
        @elseif($dadoschamado->status === 'Em andamento')
        <div class="col-sm-6">
            <div class="card mt-3 border-secondary text-dark rounded">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="btn btn-dark">
                Ver chamado
                </a>
            </div>
            </div>
        </div>
        @else
        <div class="col-sm-6">
            <div class="card mt-3 border-primary rounded">
            <div class="card-body text-dark">
                <h5 class="card-title fw-bold">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="btn btn-dark">
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