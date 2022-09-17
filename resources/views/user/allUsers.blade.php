@extends('colaboradores.layout')
@section('content')
    <table class="table table-striped table-hover mt-5">
            <thead>
            <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Nome</th>            
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($verTodos as $dadosColaborador)
                    <tr>
                    <th scope="row">{{$dadosColaborador->email}}</th>
                    <td>{{$dadosColaborador->name}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <div class="row">
                    <div class="col">
                    {{$verTodos->links()}}
                    </div>
                    </div>
        </div>
    </div>

@endsection