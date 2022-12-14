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
                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu">
                <li> <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="dropdown-item">Ver chamado</a></li>
                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar Chamado</a></li>
                </ul>   
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
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu">
                <li> <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="dropdown-item">Ver chamado</a></li>
                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar Chamado</a></li>
                </ul>   
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
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu">
                <li> <a href="{{ route('showUser', ['id' => $dadoschamado->id]) }}" class="dropdown-item">Ver chamado</a></li>
                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar Chamado</a></li>
                </ul>   
            </div>
            </div>
        </div>
        @endif
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tem certeza que deseja excluir esse chamado?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a href="{{ route('deleteChamadoUser', ['id' => $dadoschamado->id]) }}" class="btn btn-danger">Deletar Chamado</a>
                </form>
            </div>
            </div>
        </div>
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