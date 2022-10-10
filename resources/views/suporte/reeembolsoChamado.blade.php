@extends('suporte.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
              $(document).ready(function() {
  $('#inputOculto').hide();
  $('#mySelect').change(function() {
    if ($('#mySelect').val() == 'Transferência') {
      $('#inputOculto').show();
    } else {
      $('#inputOculto').hide();
    }
  });
});
            </script>
            <div class="parent" >
            <div class="div1"> 

                <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-3" method="post" enctype="multipart/form-data" action="/abrirChamadoAdiantamentoReembolso">
                @csrf
                {{ method_field('POST') }}
                <input type="hidden" id="custId" name="status" value="Criado">
                <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
                <h3 class="mb-3" style="text-align:center">Reembolso</h3>

                <p>1º - Detalhar no campo "Descrição" a que se refere o reembolso. </p>
                <br>
                <p>2º - Anexar o e-mail de aprovação do gestor no campo "Anexo". </p>
                <br>
                <p>3º - Apresentar comprovantes (Cupom fiscal/NF) dos gastos, conforme valor adiantado. </p>
                <br>
                <p>4º - Colocar o valor total do reembolso.</p>
                <br>
                <p>5º - Inserir dados bancários completos.</p>
                <br>
                <div class="col-12">
                <label f class="form-label">Nome do Colaborador:</label>
                <input type="text" required class="form-control" placeholder="Alice Santos" name="nome_colaborador">
                </div>
                <br>
                <div class="col-md-12">
                <label for="" class="form-label">Tipo de reembolso:</label>
                <select required id="inputState" name="titulo" class="form-select">
                <option selected>Adiantamento de reembolso</option>
                <option>Reembolso</option>
                </select>
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
                <div class="col-12">
                <label f class="form-label">Valor total:</label>
                <input required type="text" class="form-control" placeholder="2.450,00" name="valor_total">
                </div>
                <br>
                <div class="col-12">
                <label class="form-label">Tipo de pagamento:</label>
                <select required id="mySelect" name="tipo_pagamento" class="form-select">
                <option selected>Pix</option>
                <option>Transferência</option>
                </select>
                </div>
                <br>
                <div class="col-12">
                <label f class="form-label">Digite sua chave:</label>
                <input type="text" class="form-control" placeholder="Favorecido" name="favorecido">
                <br>
                <input type="text" class="form-control" placeholder="Chave Pix" name="pix">
                </div>
                <br>
                <div id="inputOculto">
                <div class="col-12">
                <label f class="form-label">Informações de transferência:</label>
                <input type="text" class="form-control" placeholder="Banco" name="banco">
                <br>
                <input type="text" class="form-control" placeholder="Tipo de conta" name="tipo_conta">
                <br>
                <input type="text" class="form-control" placeholder="Agência" name="agencia">
                <br>
                <input type="text" class="form-control" placeholder="Numero de conta" name="conta">
                <br>
                <input type="text" class="form-control" placeholder="505.874.112-08" name="cpf_cnpj">
                </div>
                </div>
                <br>
                <div class="col-md-12">
                <label for="formFile" class="form-label">Anexo:</label>
                <input required class="form-control" required type="file" multiple name="file_path">
                </div>
                <br>
                <div class="form-floating">
                <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descreva a que se refere o reembolso:</label>
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

           
@endsection