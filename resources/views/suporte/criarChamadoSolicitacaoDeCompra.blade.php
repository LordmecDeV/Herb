@extends('suporte.layout')
@section('content')

<div class="parent" >
        <div class="div1"> 

        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-3" enctype="multipart/form-data"method="post" action="/abrirChamadoSolicitacaoDeCompra">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Solicitação de compra">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Solicitação de compra</h3>


            <p>1º - Anexar e-mail de aceite do diretor responsável da área no campo "Anexo".</p>
            <br>



        <div class="col-md-6">
            <label f class="form-label">Nome do Colaborador:</label>
            <input type="text" required class="form-control" placeholder="Alice Santos" name="nome_colaborador">
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

        <div class="col-md-12">
            <label f class="form-label">Produto:</label>
            <input type="text" required class="form-control" placeholder="Mouse sem fio" name="produto">
        </div>

        <div class="col-12">
            <label class="form-label">Valor unitario:</label>
            <input type="number" placeholder="R$100,00" required class="form-control" name="valor_unitario">
        </div>

        <div class="col-md-12">
            <label f class="form-label">Quantidade:</label>
            <input type="number" required class="form-control" placeholder="5" name="quantidade">
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">Nível de urgência:</label>
            <select id="inputState" required name="urgencia" class="form-select">
            <option selected>Curto prazo (01 semana)</option>
            <option>Médio prazo (15 dias)</option>
            <option>Longo prazo (01 mês)</option>
            </select>
        </div>

        <div class="col-md-12">
        <label for="inputState" class="form-label">Finalidade/Objetivo:</label>
        <input type="text" required class="form-control" placeholder="Falta de mouse em estoque..." name="finalidade">
        </div>

        <div class="col-md-12">
            <label for="formFile" class="form-label">Anexo:</label>
            <input required class="form-control" required type="file" multiple name="file_path">
        </div>

        <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here"  id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Observação</label>
        </div>

        <div class="col-6">
            <a href="{{ url()->previous() }}" class="btn btn-danger">Voltar</a>   
            <button type="submit" class="btn btn-primary">Abrir chamado</button>
            
        </div>

        </form>      
        
        </div>
    </div>



@endsection