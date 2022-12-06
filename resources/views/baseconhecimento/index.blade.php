@extends('colaboradores.layout')
@section('content')

<a href="{{route('cadastroConteudo')}}" class="btn btn-primary mb-4">
    Cadastrar conteúdo na base
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
  <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
  <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
  <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z"/>
</svg>
</a>

        <div class="row mb-4">
        @foreach($verTodos as $dadosconteudo)
        <div class="col-sm-6">
            <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{$dadosconteudo->titulo}}</h5>
                <p class="card-text">{{$dadosconteudo->conteudo}}...</p>
                <a href="{{ route('verConteudo', ['id' => $dadosconteudo->id]) }}" class="btn btn-primary">Ver</a>
            </div>
            </div>
        </div>
        @endforeach
        </div>
        <div class="row">
        <div class="col">
        {{$verTodos->links()}}
        </div>

@endsection