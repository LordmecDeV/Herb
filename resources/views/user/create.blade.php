@extends('colaboradores.layout')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>
    <div class="parent">
        <div class="div1"> 
        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-4" method="post" action="/criarColaborador">
        @csrf
        {{ method_field('POST') }}
            <h3 class="mb-3" style="text-align:center">Adicionar colaborador</h3>

        <div class="col-md-6">
            <label f class="form-label">Nome:</label>
            <input type="text" class="form-control"  name="name">
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">Cargo:</label>
            <select id="inputState" name="cargo" class="form-select">
            <option selected>Colaborador</option>
            <option>Administrador</option>
            </select>
        </div>

        <div class="col-12">
            <label for="" class="form-label">Email:</label>
            <input type="email" class="form-control"  name="email">
        </div>

        <div class="col-12">
            <label for="" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="password">
        </div>

    

        <div class="col-12">

            <button type="submit" class="btn btn-primary" id="mensagem-sucesso">Criar Usuário</button>
            
        </div>

        </form>      
        
        </div>
    </div>

@endsection