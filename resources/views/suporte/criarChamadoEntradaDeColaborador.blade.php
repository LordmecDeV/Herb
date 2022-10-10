@extends('suporte.layout')
@section('content')

<div class="parent" >
        <div class="div1"> 

        <form class="row g-3 shadow-lg mb-4 p-3 mb-5 bg-body rounded mt-3" method="post" action="/criarChamadoEntradaDeColaborador">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Entrada De Colaborador">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Entrada de colaborador</h3>


            <p>1º - O prazo para solicitação de admissão é de 07 dias úteis antecedentes a data de início do colaborador.</p>
            <br>
            <p>2º - Em caso de desistência ou alteração de data, favor enviar e-mail para dpto.pessoal@zarpo.com.br.</p>
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
            <label f class="form-label">Acessos:</label>
            <input type="text" required class="form-control" placeholder="Magento, Zio, MicroSip..." name="sistemas">
        </div>

        <div class="col-12">
            <label class="form-label">Data de entrada:</label>
            <input type="date" required class="form-control" name="data_de_entrada">
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">VPN:</label>
            <select required id="inputState" name="vpn" class="form-select">
            <option selected>Sim</option>
            <option>Não</option>
            </select>
        </div>

        <div class="col-md-12">
        <label for="inputState" class="form-label">Grupo de email:</label>
        <input type="text" required class="form-control" placeholder="Ex: gestores, tech table..." name="grupos_email">
        </div>

        <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" required id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Observação</label>
        </div>

        <div class="col-6">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>  
            <button type="submit" style="background-color:#0098F0;color:white;" class="btn btn">Abrir chamado</button>
            
        </div>

        </form>      
        
        </div>
    </div>



@endsection