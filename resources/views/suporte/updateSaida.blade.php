@extends('colaboradores.layout')
@section('content')
    


        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-4" method="post" action="{{ route('updateChamado', ['id' => $attDados->id]) }}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"> 
        {{ csrf_field() }}
        {{ method_field('put') }}
            <h3 class="mb-3" style="text-align:center">Atualizar chamado:</h3>
            <input type="hidden" id="custId" name="titulo" value="{{$attDados->titulo}}">
            <input type="hidden" id="custId" name="id" value="{{$attDados->id}}">

        <div class="col-md-12">
        <label for="inputState" class="form-label">Status do chamado:</label>
        <select id="inputState" name="status"class="form-select">
            <option {{($attDados->status == 'Criado' ? 'selected' : '' )}}>Criado</option>
            <option  {{($attDados->status == 'Em andamento' ? 'selected' : '' )}}>Em andamento</option>
            <option  {{($attDados->status == 'Concluido' ? 'selected' : '' )}}>Concluido</option>
            </select>
        </div>

        <div class="col-md-12">
        <label for="inputState" class="form-label">Atribuir chamado para:</label>
        <select id="inputState" name="atribuido"class="form-select">
            <option value="johnny.almeida@zarpo.com.br" {{($attDados->atribuido == 'Johnny Almeida' ? 'selected' : '' )}}>Johnny Almeida</option>
            </select>
        </div>

        <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" value="{{$attDados->status}}" name="observacao" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Observação</label>
        </div>

        <div class="col-12">  
            <button type="submit" class="btn btn-primary">Atualizar chamado</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>            
        </div>
        </form>      
        

@endsection