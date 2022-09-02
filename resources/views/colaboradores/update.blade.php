@extends('colaboradores.layout')
@section('content')
            <form  class="row g-3 shadow p-3 mb-4 mt-3 bg-body rounded"  action="{{ route('updateColaborador', ['id' => $attDados->id]) }}" method="POST" >
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            {{ method_field('put') }}

            <h1 style="text-align:center;" class="mb-4">Entrada de colaborador</h1>

            <div class="col-md-6">
                <label for="nome" class="form-label">Nome:</label>
                    <input type="name" class="form-control" id="nome" name="nome" require placeholder="Gabriel Santos" value="{{$attDados->nome}}">
                    </div>

                    <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" require name="email" placeholder="gabriel@zarpo.com.br" value="{{$attDados->email}}">
                    </div>

                    <div class="col-12">
                    <label for="data_de_entrada" class="form-label">Data de entrada:</label>
                    <input type="date" class="form-control" require name="data_de_entrada" id="data_de_entrada" value="{{$attDados->data_de_entrada}}">
                    </div>

                    <div class="form-floating">
                    <select class="form-select" require name="mouse" id="mouse" aria-label="Floating label select example" placeholder="Colaborador retirou mouse?" value="{{$attDados->mouse}}">
                    <option value="Sim" {{($attDados->mouse == 'Sim' ? 'selected' : '' )}}>Sim</option>            
                    <option value="Não" {{($attDados->mouse == 'Não' ? 'selected' :'' )}}>Não</option>
                    <option value="Não temos em estoque" {{($attDados->mouse == 'Não temos em estoque' ? 'selected' :'' )}}>Não temos em estoque</option>   
                    </select>
                    <label for="floatingSelect">Mouse</label>
                    </div>

                    <div class="form-floating">
                    <select class="form-select" name="teclado" require id="teclado" aria-label="Floating label select example" value="{{$attDados->teclado}}">
                    <option value="Sim" {{($attDados->teclado == 'Sim' ? 'selected' : '' )}}>Sim</option>            
                    <option value="Não" {{($attDados->teclado == 'Não' ? 'selected' :'' )}}>Não</option>
                    <option value="Não temos em estoque" {{($attDados->teclado == 'Não temos em estoque' ? 'selected' :'' )}}>Não temos em estoque</option>   
                    </select>
                    <label for="floatingSelect">Teclado</label>
                    </div>

                    <div class="form-floating">
                    <select class="form-select" require name="suporte" id="suporte" aria-label="Floating label select example" value="{{$attDados->suporte}}">
                    <option value="Sim" {{($attDados->suporte == 'Sim' ? 'selected' : '' )}}>Sim</option>            
                    <option value="Não" {{($attDados->suporte == 'Não' ? 'selected' :'' )}}>Não</option>
                    <option value="Não temos em estoque" {{($attDados->suporte == 'Não temos em estoque' ? 'selected' :'' )}}>Não temos em estoque</option>   
                    </select>
                    <label for="floatingSelect">Suporte</label>
                    </div>

                    <div class="form-floating">
                    <select class="form-select" require name="monitor" id="monitor" aria-label="Floating label select example" value="{{$attDados->monitor}}">
                    <option value="Sim" {{($attDados->monitor == 'Sim' ? 'selected' : '' )}}>Sim</option>            
                    <option value="Não" {{($attDados->monitor == 'Não' ? 'selected' :'' )}}>Não</option>
                    <option value="Não temos em estoque" {{($attDados->monitor == 'Não temos em estoque' ? 'selected' :'' )}}>Não temos em estoque</option>   
                    </select>
                    <label for="floatingSelect">Monitor</label>
                    </div>

                    <div class="col-md-2">
                    <label for="departamento" class="form-label">Departamento:</label>
                    <input type="text" require class="form-control" id="departamento" name="departamento" value="{{$attDados->departamento}}">
                    </div>

                    <div class="form-floating">
                    <select class="form-select" require name="id_do_pc" id="id_do_pc" aria-label="Floating label select example">
                    <option selected>{{$attDados->id_do_pc}}</option>
                    @foreach($pcColaborador as $cadastrarPcColaborador)
                    <option>{{$cadastrarPcColaborador->id_do_pc}}</option>
                    @endforeach
                    </select>
                    <label for="departamento" class="form-label">Id do pc:</label>
                    </div>

                    <div class="form-floating">
                    <textarea class="form-control" require placeholder="Leave a comment here" id="observacao" name="observacao" value="{{$attDados->observacao}}"></textarea>
                    <label for="floatingTextarea">Observação</label>
                    </div>
                    <!-- botão que envia as info para o banck-end!-->
                <div class="col-12">
            <button type="submit" class="btn btn-success ">Atualizar dados do colaborador</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
            </div>

        </form> 

@endsection