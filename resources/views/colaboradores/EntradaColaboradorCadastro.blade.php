@extends('colaboradores.layout')
@section('content')
        <form class="row g-3 shadow p-3 mb-4 bg-body rounded mt-3 " action="/entradaColaboradorCadastro" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}

            <h1 style="text-align:center;" class="mb-4">Entrada de colaborador</h1>

            <div class="col-md-6">
                <label for="nome" class="form-label">Nome:</label>
                    <input type="name" class="form-control" id="nome" name="nome" require placeholder="Gabriel Santos">
                    </div>

                    <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" require name="email" placeholder="gabriel@zarpo.com.br">
                    </div>

                    <div class="col-12">
                    <label for="data_de_entrada" class="form-label">Data de entrada:</label>
                    <input type="date" class="form-control" require name="data_de_entrada" id="data_de_entrada">
                    </div>

                    <div class="form-floating">
                    <select class="form-select" require name="mouse" id="mouse" aria-label="Floating label select example">
                    <option selected>Colaborador retirou mouse?</option>
                    <option>Sim</option>
                    <option>Não</option>
                    <option>Não temos em estoque</option>
                    </select>
                    <label for="floatingSelect">Mouse</label>
                    </div>

                    <div class="form-floating">
                    <select class="form-select" name="teclado" require id="teclado" aria-label="Floating label select example">
                    <option selected>Colaborador retirou teclado?</option>
                    <option>Sim</option>
                    <option>Não</option>
                    <option>Não temos em estoque</option>
                    </select>
                    <label for="floatingSelect">Teclado</label>
                    </div>

                    <div class="form-floating">
                    <select class="form-select" require name="suporte" id="suporte" aria-label="Floating label select example">
                    <option selected>Colaborador retirou suporte?</option>
                    <option>Sim</option>
                    <option>Não</option>
                    <option>Não temos em estoque</option>
                    </select>
                    <label for="floatingSelect">Suporte</label>
                    </div>

                    <div class="form-floating">
                    <select class="form-select" require name="monitor" id="monitor" aria-label="Floating label select example">
                    <option selected>Colaborador retirou monitor?</option>
                    <option>Sim</option>
                    <option>Não</option>
                    <option>Não temos em estoque</option>
                    </select>
                    <label for="floatingSelect">Monitor</label>
                    </div>

                    <div class="col-md-12">
                        <label for="" class="form-label">Departamento:</label>
                        <select id="inputState" name="departamento" required class="form-select">
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
                    
                   
                    <div class="form-floating">
                    
                    <select class="form-select" require name="id_do_pc" id="id_do_pc" aria-label="Floating label select example">
                    @foreach($pcColaborador as $cadastrarPcColaborador)
                    <option>{{$cadastrarPcColaborador->id_do_pc}}</option>
                    @endforeach
                    </select>
                    <label for="departamento" class="form-label">Id do pc:</label>
                    </div>
                    
                    <div class="form-floating">
                    <textarea class="form-control" require placeholder="Leave a comment here" id="observacao" name="observacao"></textarea>
                    <label for="floatingTextarea">Observação</label>
                    </div>
                    <!-- botão que envia as info para o banck-end!-->
                <div class="col-12">
            <button type="submit" class="btn btn-success ">Cadastrar colaborador</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
            </div>

        </form> 

@endsection