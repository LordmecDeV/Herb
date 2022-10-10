@extends('suporte.layout')
@section('content')

<div class="parent">
        <div class="div1"> 
        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-4" enctype="multipart/form-data" method="post" action="/abrirBeneficios">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Benefícios">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Benefícios</h3>
        <br>
        <p> - Para qualquer solicitação de alteração, inclusão ou cancelamento, redigir carta de próprio punho, devidamente assinada pelo gestor e diretor da área responsável no campo "Anexo".</p>
        <br>

        <div class="col-md-12">
            <label f class="form-label">Nome do Colaborador:</label>
            <input type="text" class="form-control" required placeholder="João Victor Silva" name="nome_colaborador">
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">Departamento:</label>
            <select id="inputState" name="dpto" required class="form-select">
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
            <label for="" class="form-label">Tipo de benefício :</label>
            <select id="inputState" name="tipo_beneficio" required class="form-select">
            <option selected>Plano odontológico</option>
            <option>Plano de saúde</option>
            <option>VT</option>
            </select>
        </div>

        <div class="col-md-12">
        <label for="inputState" class="form-label">Grau de parentesco (Para dependente):</label>
        <select id="inputState" name="grau_parentesco" required class="form-select">
            <option selected>Cônjuge</option>
            <option>Filho (a)</option>
            <option>Enteado (a)</option>
            </select>
        </div>

        <div class="col-md-12">
        <label for="formFile" class="form-label">Anexo:</label>
        <input class="form-control" required type="file" name="file_path">
        </div>

        <div class="col-12">
            <label for="" class="form-label">Observação:</label>
            <textarea type="text" class="form-control" required name="observacao"></textarea>
        </div>

        <div class="col-12">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>  
            <button type="submit" style="background-color:#0098F0;color:white;" class="btn btn">Abrir chamado</button>
            
        </div>
        </form>      
        </div>
    </div>

@endsection