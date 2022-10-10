@extends('suporte.layout')
@section('content')

<div class="parent">
        <div class="div1"> 

        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-4" enctype="multipart/form-data" method="post" action="/criarChamadoMovimentacaoColaborador">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Movimentação de colaborador">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Movimentação de colaborador</h3>

        <div class="col-md-12">
            <label f class="form-label">Nome do Colaborador:</label>
            <input type="text" class="form-control" required placeholder="João Victor Silva" name="nome_colaborador">
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">Departamento atual:</label>
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


        <div class="col-md-6">
            <label for="" class="form-label">Departamento proposto:</label>
            <select id="inputState" name="dpto_proposto" required class="form-select">
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
            <label for="" class="form-label">Salário atual:</label>
            <input type="text" class="form-control" required placeholder="2.500,00"  name="sal_atual">
        </div>

        <div class="col-6">
            <label for="" class="form-label">Salário proposto:</label>
            <input type="text" class="form-control" required placeholder="3.000,00" name="sal_proposto">
        </div>

        <div class="col-6">
            <label for="" class="form-label">Cargo atual:</label>
            <input type="text" class="form-control" required placeholder="Desenvolvedor" name="cargo_atual">
        </div>

        <div class="col-6">
            <label for="" class="form-label">Cargo proposto:</label>
            <input type="text" class="form-control" required placeholder="Tech lead"name="cargo_proposto">
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">Tipo de movimentação:</label>
            <select id="inputState" name="tipo_movimentacao" required class="form-select">
            <option selected>Promoção (ascensão de cargo com aumento salarial)</option>
            <option>Mérito (aumento salarial no mesmo cargo)</option>
            <option>Transferência com aumento salarial (mudança de área com aumento)</option>
            <option>Transferência sem aumento salarial (mudança de área sem aumento)</option>
            </select>
        </div>

        <div class="col-12">
            <label for="" class="form-label">Data da movimentação:</label>
            <input type="date" required class="form-control"  name="data_movimentacao">
        </div>

        <div class="col-md-12">
        <label for="formFile" class="form-label">Anexo(Aprovação do diretor):</label>
        <input class="form-control" required type="file" name="file_path">
        </div>


       

        <div class="col-3">
            <label for="" class="form-label">% de aumento:</label>
            <input type="number" required class="form-control" name="porcentagem_aumento">
        </div>

        <div class="col-md-3">
        <label for="inputState" class="form-label">Adicional de cargo de confiança:</label>
        <select id="inputState" name="cargo_confianca" required class="form-select">
            <option selected>Sim</option>
            <option>Não</option>
            </select>
        </div>

        <div class="col-3">
            <label for="" class="form-label">Comissão/Bônus:</label>
            <input type="text" class="form-control"required name="comissao">
        </div>

        <div class="col-md-3">
        <label for="inputState" class="form-label">Recorrência da comissão/bônus:</label>
        <select id="inputState" name="recorrencia_comissao" required class="form-select">
            <option>Trimestral</option>
            <option>Não se aplica</option>
            </select>
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