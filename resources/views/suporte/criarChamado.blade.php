@extends('suporte.layout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>
    <div class="parent">
        <div class="div1"> 

        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-4" method="post" action="/criarChamadoSaidaDeColaborador" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Saída De Colaborador">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Saída de colaborador</h3>

        <div class="col-md-6">
            <label f class="form-label">Nome do Colaborador:</label>
            <input type="text" required class="form-control"  name="nome_colaborador">
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">Departamento:</label>
            <select id="inputState" required name="dpto" class="form-select">
            <option selected>Aéreo</option>
            <option>Conteúdo</option>
            <option>Financeiro</option>
            <option>Recursos Humanos</option>
            <option>Marketing</option>
            <option>Novos negócios</option>
            <option>Customer Service</option>
            <option>Sourcing Operacional</option>
            <option>Sourcing Comercial</option>
            <option>Upload</option>
            <option>Tech Table(P&D)</option>
            <option>Tech Table(I&S)</option>
            <option>Tech Table(BI)</option>
            <option>Diretoria</option>
            </select>
        </div>

        <div class="col-12">
            <label for="" class="form-label">Data do pedido de demissão:</label>
            <input type="date" required class="form-control"  name="data_do_pedido_de_demissao">
        </div>

        <div class="col-12">
            <label for="" class="form-label">Data do ultimo dia do colaborador:</label>
            <input type="date" required class="form-control" name="data_do_ultimo_dia_do_colaborador">
        </div>

        <div class="col-md-12">
        <label for="inputState" class="form-label">Aviso prévio trabalhado:</label>
            <select id="inputState" required name="aviso_previo" class="form-select">
            <option selected>Sim</option>
            <option>Não</option>
            </select>
        </div>

        <div class="col-md-12">
        <label for="formFile" class="form-label">Anexo:</label>
        <input class="form-control" required type="file" name="file_path">
        </div>

        <div class="col-md-12">
        <label for="inputState" class="form-label">Tipo de desligamento:</label>
        <select id="inputState" required name="tipo_desligamento"class="form-select">
            <option selected>Voluntário (pedido de demissão)</option>
            <option>Involuntário</option>
            </select>
        </div>

        <div class="col-12">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>  
            <button type="submit" style="background-color:#0098F0;color:white;" class="btn btn">Abrir chamado</button>
            
        </div>

        </form>      
        
        </div>
    </div>

@endsection