@extends('colaboradores.layout')
@section('content')
<a href="{{route('entradadecolaborador')}}" class="btn btn-primary mb-2">
    Abrir um chamado
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
  <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
  <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
  <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z"/>
</svg>
</a>
    <div class="row mb-4">
        @foreach($verTodos as $dadoschamado)
        @if($dadoschamado->status === 'Criado')
        <div class="col-sm-6">
            <div class="card mt-3 border-danger">
            <div class="card-body">
                <h5 class="card-title">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('verChamado', ['id' => $dadoschamado->id]) }}" class="btn btn-primary">Ver</a>
                <a href="{{ route('atualizarChamado', ['id' => $dadoschamado->id]) }}" class="btn btn-primary justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                </svg>
                </a>
            </div>
            </div>
        </div>
        @elseif($dadoschamado->status === 'Em andamento')
        <div class="col-sm-6">
            <div class="card mt-3 border-secondary" >
            <div class="card-body">
                <h5 class="card-title">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('verChamado', ['id' => $dadoschamado->id]) }}" class="btn btn-primary">Ver</a>
                <a href="{{ route('atualizarChamado', ['id' => $dadoschamado->id]) }}" class="btn btn-primary justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                </svg>
                </a>
            </div>
            </div>
        </div>
        @else
        <div class="col-sm-6">
            <div class="card mt-3 border-primary" >
            <div class="card-body">
                <h5 class="card-title">{{$dadoschamado->titulo}} - CH{{$dadoschamado->id}}</h5>
                <p class="card-text">Status: {{$dadoschamado->status}}</p>
                <p class="card-text">Atribuido: {{$dadoschamado->atribuido}}</p>
                <p class="card-text">Solicitado por: {{$dadoschamado->colaboradorID}}</p>
                <p class="card-text">Criado: {{$dadoschamado->created_at}}</p>
                <a href="{{ route('verChamado', ['id' => $dadoschamado->id]) }}" class="btn btn-primary">Ver</a>
                <a href="{{ route('atualizarChamado', ['id' => $dadoschamado->id]) }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                </svg>
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

@endsection