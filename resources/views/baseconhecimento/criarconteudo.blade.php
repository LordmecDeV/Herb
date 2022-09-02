@extends('colaboradores.layout')
@section('content')
        <form class="row g-3 shadow p-3 mb-4 bg-body rounded mt-3 " action="/cadastroConteudo" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}

            <h1 style="text-align:center;" class="mb-4">Cadastrar Conteúdo</h1>
            <div class="form-floating mt-4">
            <h6>Título :</h6>
            <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-floating mt-4">
            <h6>Conteúdo:</h6>
            <textarea class="form-control" name="conteudo" id="floatingTextarea2" style="height: 250px"></textarea>
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-success ">Cadastrar conteúdo</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
@endsection