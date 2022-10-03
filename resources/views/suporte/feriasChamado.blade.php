@extends('suporte.layout')
@section('content')

<div class="parent">
        <div class="div1"> 

        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-4" enctype="multipart/form-data" method="post" action="/criarChamadoFerias">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Férias">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Férias</h3>

        <p>1º - O prazo para solicitação de férias é de 45 dias corridos antecedentes a data de início.</p>
        <br>
        <p>2º - Anexar o e-mail de aprovação do gestor no campo "Anexo".</p>
        <br>
        <p>3º - Em caso de desistência ou alteração de datas, favor enviar e-mail para dpto.pessoal@zarpo.com.br </p>
        <br>
        <p>4º - Estagiários não podem vender férias.</p>
        <br>

        <div class="col-md-12">
            <label f class="form-label">Nome do Colaborador:</label>
            <input required type="text" class="form-control" required placeholder="João Victor Silva" name="nome_colaborador">
        </div>


        <div class="col-md-12">
            <label for="" class="form-label">Departamento:</label>
            <select required id="inputState" name="dpto" required class="form-select">
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


        <div class="col-6">
            <label for="" class="form-label">Data inicial:</label>
            <input required type="date" required class="form-control"  name="data_inicial">
        </div>

        <div class="col-6">
            <label for="" class="form-label">Data final:</label>
            <input required type="date" required class="form-control"  name="data_final">
        </div>

        <div class="col-md-12">
        <label for="inputState" class="form-label">Período:</label>
        <select required id="inputState" name="periodo" required class="form-select">
            <option selected>Único: 30 dias.</option>
            <option>1º - Período: 20 dias de férias e 2º Período: 10 dias de férias.</option>
            <option>1º - Período: 15 dias de férias e 2º Período: 15 dias de férias.</option>
            <option>1º - Período: 15 dias de férias, 2º Período: 10 dias de férias e 3º Período: 5 dias de férias</option>
            </select>
        </div>

        <div class="col-md-12">
        <label for="formFile" class="form-label">Anexo:</label>
        <input required class="form-control" required type="file" name="file_path">
        </div>

        <div class="col-12">
            <label for="" class="form-label">Observação:</label>
            <textarea required type="text" class="form-control" required name="observacao"></textarea>
        </div>

        <div class="col-12">

            <button type="submit" class="btn btn-primary" id="mensagem-sucesso">Abrir chamado</button>
            
        </div>

        </form>      
        
        </div>
    </div>

@endsection