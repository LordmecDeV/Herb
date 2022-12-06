@extends('suporte.layout')
@section('content')

<div class="parent" >
        <div class="div1"> 

        <form class="row g-3 shadow-lg p-3  bg-body rounded mt-3 mb-4" method="post" action="/criarChamadoSuporte">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Suporte">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Suporte</h3>

        <div class="col-md-12">
            <label f class="form-label">Qual o problema?</label>
            <input type="text" class="form-control" required placeholder="Ex: Reset de senha, notebook não liga..." name="problema">
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">Departamento:</label>
            <select required id="inputState" name="dpto" class="form-select">
            <option selected>Aéreo</option>
            <option>Conteúdo</option>
            <option>Financeiro</option>
            <option>Recursos Humanos</option>
            <option>Marketing</option>
            <option>Novos negócios</option>
            <option>Customer Service</option>
            <option>Sourcing</option>
            <option>Sourcing Operacional</option>
            <option>Sourcing Comercial</option>
            <option>Upload</option>
            <option>Tech Table(P&D)</option>
            <option>Tech Table(I&S)</option>
            <option>Tech Table(BI)</option>
            <option>Diretoria</option>
            </select>
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">Prioridade:</label>
            <select required id="inputState" name="prioridade" class="form-select">
            <option>Baixa</option>
            <option>Média</option>
            <option>Alta</option>
            </select>
        </div>


        <div class="form-floating">
        <textarea required class="form-control" placeholder="Resuma seu problema" id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Resuma seu problema</label>
        </div>

        <div class="col-6">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>  
            <button type="submit" style="background-color:#0098F0;color:white;" class="btn btn">Abrir chamado</button>
            
        </div>

        </form>      
        
        </div>
    </div>

@endsection