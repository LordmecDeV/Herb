@extends('suporte.layout')
@section('content')
<div class="parent">
        <div class="div1"> 
<form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-3" method="post" enctype="multipart/form-data" action="/abrirChamadoAdmissao">
@csrf
{{ method_field('POST') }}
<input type="hidden" id="custId" name="titulo" value="Admissão">
<input type="hidden" id="custId" name="status" value="Criado">
<input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
<h3 class="mb-3" style="text-align:center">Solicitação de admissão</h3>

<p>1º - O prazo para solicitação de admissão é de 07 dias úteis antecedentes a data de início do colaborador.</p>
<br>
<p>2º - Em caso de desistência ou alteração de data, favor enviar e-mail para dpto.pessoal@zarpo.com.br.</p>
<br>
<div class="col-12">
<label f class="form-label">Nome do Colaborador:</label>
<input type="text" required class="form-control" placeholder="Alice Santos" name="nome_colaborador">
</div>
<br>
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
<option>Sourcing Operacional</option>
<option>Sourcing Comercial</option>
<option>Upload</option>
<option>Tech Table(P&D)</option>
<option>Tech Table(I&S)</option>
<option>Tech Table(BI)</option>
<option>Diretoria</option>
</select>
</div>
<br>
<div class="col-md-12">
<label for="" class="form-label">Regime:</label>
<select required id="inputState" name="regime" class="form-select">
<option selected>Estágio</option>
<option>CLT</option>
<option>Teletrabalho</option>
<option>Jovem Aprendiz</option>
<option>Terceirizado</option>
</select>
</div>
<br>
<div class="col-12">
<label f class="form-label">Cargo:</label>
<input required type="text" class="form-control" placeholder="Desenvolvedor" name="cargo_atual">
</div>
<br>
<div class="col-12">
<label f class="form-label">Salário fixo:</label>
<input required type="text" class="form-control" placeholder="2.450,00" name="sal_atual">
</div>
<br>
<div class="col-12">
<label f class="form-label">Telefone para contato(contratado):</label>
<input required type="tel" class="form-control" placeholder="11973525977" name="telefone">
</div>
<br>
<div class="col-md-12">
<label for="" class="form-label">Horário de Entrada/Saída:</label>
<select required id="inputState" name="horario_trabalho" class="form-select">
<option selected>08:30 às 18:18 (CLT)</option>
<option>09:00 às 18:48 (CLT)</option>
<option>10:00 às 19:48 (CLT)</option>
<option>09:00 às 16:00 (Estágio)</option>
<option>10:00 às 17:00 (Estágio)</option>
<option>13:00 às 19:00 (Estágio)</option>
<option>14:00 às 20:00 (Estágio)</option>
</select>
</div>
<br>

<div class="col-md-12">
<label f class="form-label">Acessos:</label>
<input required type="text" class="form-control" placeholder="Magento, Zio, MicroSip..." name="sistemas">
</div>
<br>
<div class="col-md-12">
<label for="inputState" class="form-label">Grupo de email:</label>
<input required type="text" class="form-control" placeholder="Ex: gestores, tech table..." name="grupos_email">
</div>
<br>
<div class="col-md-12">
<label for="formFile" class="form-label">Anexo:</label>
<input required class="form-control" required type="file" multiple name="file_path">
</div>
<br>
<div class="col-12">
<label class="form-label">Data de início(pretendida):</label>
<input required type="date" class="form-control" name="data_de_entrada">
</div>
<br>
<div class="form-floating">
<textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
<label for="floatingTextarea2">Observação</label>
</div>

<div class="col-6">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>  
            <button type="submit" style="background-color:#0098F0;color:white;" class="btn btn">Abrir chamado</button>
            
        </div>
</div>
</div> 

</div>
</div>
</div>
</div> 
</form> 
</div>
</div>



@endsection