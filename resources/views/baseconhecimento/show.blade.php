    @extends('colaboradores.layout')
    @section('content')
                <ul class="list-group list-group-flush shadow p-3 mb-4 mt-3 bg-body rounded">
                                        <h3 style="text-align:center;"style="font-weight: bold;text-align:center;">{{$verDados->titulo}}</h3>
                                    <li class="list-group-item" style="text-align:center;">{{$verDados->titulo}}</li>
                                    <li class="list-group-item">Conteúdo: {{$verDados->conteudo}}</li>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger">Voltar</a>   
                                        </ul>
    @endsection