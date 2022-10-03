@extends('colaboradores.layout')
@section('content')
    <table class="table table-striped table-hover mt-5">
            <thead>
            <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>              
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($verTodos as $dadosColaborador)
                    <tr>
                    <th>{{$dadosColaborador->name}}</td>
                    <th>{{$dadosColaborador->cargo}}</td>    
                    <th scope="row">{{$dadosColaborador->email}}</th>
                    <td>
                    <a href="{{ route('deletarUsuario', ['id' => $dadosColaborador->id]) }}">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeletar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>
                    </button>
                    </a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <div class="row">
                    <div class="col">
                    {{$verTodos->links()}}
                    </div>
                    <div class="col" style="margin-left:650px;">

                    <a href="{{route('criarUsuario')}}"><button class="btn btn-primary" >Adicionar
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    </button>
                    </a>

                    </div>
                    </div>
        </div>
    </div>
    

@endsection