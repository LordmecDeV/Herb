<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir Chamado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Righteous&display=swap");
      .parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div1 { grid-area: 1 / 1 / 6 / 6; }

.parent1 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div2 { grid-area: 3/ 1 / 6 / 6; }

.sec-center {
  position: relative;
  max-width: 100%;
  text-align: center;
  z-index: 200;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
  opacity: 0;
  pointer-events: none;
}
.dark-light:checked + label,
.dark-light:not(:checked) + label{
  position: fixed;
  top: 40px;
  right: 40px;
  z-index: 20000;
  display: block;
  border-radius: 50%;
  width: 46px;
  height: 46px;
  cursor: pointer;
  transition: all 200ms linear;
  box-shadow: 0 0 25px #0275d8
}
.dark-light:checked + label{
  transform: rotate(360deg);
}
.dark-light:checked + label:after,
.dark-light:not(:checked) + label:after{
  position: absolute;
  content: '';
  top: 1px;
  left: 1px;
  overflow: hidden;
  z-index: 2;
  display: block;
  border-radius: 50%;
  width: 44px;
  height: 44px;
  background-color: #000;
  background-image: url('https://assets.codepen.io/1462889/moon.svg');
  background-size: 20px 20px;
  background-repeat: no-repeat;
  background-position: center;
  transition: all 200ms linear;
  opacity: 0;
}
.dark-light:checked + label:after {
  opacity: 1;
}
.dark-light:checked + label:before,
.dark-light:not(:checked) + label:before{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  overflow: hidden;
  z-index: 1;
  display: block;
  border-radius: 50%;
  width: 46px;
  height: 46px;
  background-color: #0275d8;
  background-image: url('https://assets.codepen.io/1462889/sun.svg');
  background-size: 25px 25px;
  background-repeat: no-repeat;
  background-position: center;
  transition: all 200ms linear;
}
.dark-light:checked + label:before{
  background-color: #fff;
}
.light-back{
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1;
  background-color: #fff;
  overflow: hidden;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
  background-position: center;
  background-repeat: repeat;
  background-size: 4%;
  height: 100%;
  width: 100%;
  transition: all 200ms linear;
  opacity: 0;
}
.dark-light:checked ~ .light-back{
  opacity: 1;
}
.dropdown:checked + label,
.dropdown:not(:checked) + label{
  position: relative;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 15px;
  line-height: 2;
  height: 50px;
  transition: all 200ms linear;
  border-radius: 4px;
  width: 220px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: none;
  background-color: #0275d8;
  cursor: pointer;
  color: #fff;
  box-shadow: 0 12px 35px 0 rgba(255,235,167,.15);
}
.dark-light:checked ~ .sec-center .for-dropdown{
  background-color: #000;
  color: #0275d8;
  box-shadow: 0 12px 35px 0;
}
.dropdown:checked + label:before,
.dropdown:not(:checked) + label:before{
  position: fixed;
  top: 0;
  left: 0;
  content: '';
  width: 100%;
  height: 100%;
  z-index: -1;
  cursor: auto;
  pointer-events: none;
}
.dropdown:checked + label:before{
  pointer-events: auto;
}
.dropdown:not(:checked) + label .uil {
  font-size: 24px;
  margin-left: 10px;
  transition: transform 200ms linear;
}
.dropdown:checked + label .uil {
  transform: rotate(180deg);
  font-size: 24px;
  margin-left: 10px;
  transition: transform 200ms linear;
}
.section-dropdown {
  position: absolute;
  padding: 5px;
  background-color: #111;
  top: 70px;
  left: 0px;
  width: 100%;
  border-radius: 4px;
  display: block;
  box-shadow: 0 14px 35px 0 rgba(9,9,12,0.4);
  z-index: 2;
  opacity: 0;
  pointer-events: none;
  transform: translateY(20px);
  transition: all 200ms linear;
}
.dark-light:checked ~ .sec-center .section-dropdown {
  background-color: #fff;
  box-shadow: 0 14px 35px 0 rgba(9,9,12,0.15);
}
.dropdown:checked ~ .section-dropdown{
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}
.section-dropdown:before {
  position: absolute;
  top: -20px;
  left: 0;
  width: 100%;
  height: 20px;
  content: '';
  display: block;
  z-index: 1;
}
.section-dropdown:after {
  position: absolute;
  top: -7px;
  left: 150px;
  width: 0; 
  height: 0; 
  border-left: 8px solid transparent;
  border-right: 8px solid transparent; 
  border-bottom: 8px solid #111;
  content: '';
  display: block;
  z-index: 2;
  transition: all 200ms linear;
}
.dark-light:checked ~ .sec-center .section-dropdown:after {
  border-bottom: 8px solid #fff;
}

a {
  position: relative;
  color: #fff;
  transition: all 200ms linear;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 15px;
  border-radius: 2px;
  padding: 5px 0;
  padding-left: 20px;
  padding-right: 15px;
  margin: 2px 0;
  text-align: left;
  text-decoration: none;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  justify-content: space-between;
    -ms-flex-pack: distribute;
}
.dark-light:checked ~ .sec-center .section-dropdown a {
  color: #102770;
}
a:hover {
  color: #0275d8;
  background-color: #4F4F4F;
}
.dark-light:checked ~ .sec-center .section-dropdown a:hover {
  color: #0275d8;
  background-color: #0275d8;
}
a .uil {
  font-size: 22px;
}
.dropdown-sub:checked + label,
.dropdown-sub:not(:checked) + label{
  position: relative;
  color: #fff;
  transition: all 200ms linear;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 15px;
  border-radius: 2px;
  padding: 5px 0;
  padding-left: 20px;
  padding-right: 15px;
  text-align: left;
  text-decoration: none;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  justify-content: space-between;
    -ms-flex-pack: distribute;
    cursor: pointer;
}
.dropdown-sub:checked + label .uil,
.dropdown-sub:not(:checked) + label .uil{
  font-size: 22px;
}
.dropdown-sub:not(:checked) + label .uil {
  transition: transform 200ms linear;
}
.dropdown-sub:checked + label .uil {
  transform: rotate(135deg);
  transition: transform 200ms linear;
}
.dropdown-sub:checked + label:hover,
.dropdown-sub:not(:checked) + label:hover{
  color: #0275d8;
  background-color: #4F4F4F;
}
.dark-light:checked ~ .sec-center .section-dropdown .for-dropdown-sub{
  color: #0275d8;
}
.dark-light:checked ~ .sec-center .section-dropdown .for-dropdown-sub:hover{
  color: #4F4F4F;
  background-color: #0275d8;
}

.section-dropdown-sub {
  position: relative;
  display: block;
  width: 100%;
  pointer-events: none;
  opacity: 0;
  max-height: 0;
  padding-left: 10px;
  padding-right: 3px;
  overflow: hidden;
  transition: all 200ms linear;
}
.dropdown-sub:checked ~ .section-dropdown-sub{
  pointer-events: auto;
  opacity: 1;
  max-height: 999px;
}
.section-dropdown-sub a {
  font-size: 14px;
}
.section-dropdown-sub a .uil {
  font-size: 20px;
}
.logo {
	position: fixed;
	top: 50px;
	left: 40px;
	display: block;
	z-index: 11000000;
  background-color: transparent;
  border-radius: 0;
  padding: 0;
	transition: all 250ms linear;
}
.logo:hover {
  background-color: transparent;
}
.logo img {
	height: 26px;
	width: auto;
	display: block;
  transition: all 200ms linear;
}
.dark-light:checked ~ .logo img{
  filter: brightness(10%);
}

@media screen and (max-width: 991px) {
.logo {
	top: 30px;
	left: 20px;
}
.dark-light:checked + label,
.dark-light:not(:checked) + label{
  top: 20px;
  right: 20px;
}
footer{
background: #ffab62;
width: 100%;
height: 100px;
position: absolute;
bottom: 0;
left: 0;
}


}
    </style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" style="background-color:#4F4F4F">
    <a href="https://imgbb.com/"><img src="https://i.ibb.co/305TYbS/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;margin-left:40px;" border="0"></a>
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

    

      <div class="col-md-3 text-end m-3">
      <div class="sec-center"> 	
          <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
          <label class="for-dropdown" for="dropdown">{{ Auth::user()->name }}<i class="uil uil-arrow-down"></i></label>
          <div class="section-dropdown"> 
            <a href="{{ route('indexUser', ['id' => Auth::user()->id]) }}">Meus chamados<i class="uil uil-arrow-right"></i></a>
            <a href="{{route('home')}}">Abrir um chamado<i class="uil uil-arrow-right"></i></a>
            <a href="{{route('logout')}}">Logout<i class="uil uil-arrow-right"></i></a>
          </div>
      </div>
    </header>
    
<body>

            <div class="container text-center">
            <div class="row row-cols-2" style="margin-top:150px;margin-left:px;">
                <div class="col">
                <div class="card w-80 mb-3 shadow p-3  bg-body rounded" style="">
                <div class="card-body">
                <h5 class="card-title">Adiantamento de reembolso
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
                </h5>
                <p class="card-text"></p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Abrir chamado</button>
                </div>
                </div>
                </div>

                <div class="col">
                <div class="card w-80 shadow p-3  bg-body rounded">
                <div class="card-body">
                <h5 class="card-title">Reembolso
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
                </h5>
                <p class="card-text"></p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Abrir chamado</button>
                </div>
                </div>
                </div>

                </div>
                </div>

                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adiantamento de reemsolso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="parent" >
                        <div class="div1"> 

                        <form class="" method="post" enctype="multipart/form-data" action="/abrirChamadoAdiantamentoReembolso">
                        @csrf
                        {{ method_field('POST') }}
                            <input type="hidden" id="custId" name="titulo" value="Adiantamento de reembolso">
                            <input type="hidden" id="custId" name="status" value="Criado">
                            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
                            <h3 class="mb-3" style="text-align:center">Adiantamento de reemsolso</h3>

                            <p>1º - Detalhar no campo "Descrição" a que se refere o adiantamento. </p>
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
                            <select required id="inputState" name="tipo_pagamento" class="form-select">
                            <option selected>Pix</option>
                            <option>Transferência</option>
                            </select>
                        </div>
                        <br>
                        <div class="col-12">
                            <label f class="form-label">Digite sua chave:</label>
                            <input  type="text" class="form-control" placeholder="Favorecido" name="favorecido">
                            <br>
                            <input  type="text" class="form-control" placeholder="Chave Pix" name="pix">
                        </div>
                        <br>
                        <div class="col-12">
                            <label f class="form-label">Informações de transferência:</label>
                            <input  type="text" class="form-control" placeholder="Banco" name="banco">
                            <br>
                            <input  type="text" class="form-control" placeholder="Favorecido" name="favorecido">
                            <br>
                            <input  type="text" class="form-control" placeholder="Tipo de conta" name="tipo_conta">
                            <br>
                            <input  type="text" class="form-control" placeholder="Agência" name="agencia">
                            <br>
                            <input  type="text" class="form-control" placeholder="Numero de conta" name="conta">
                            <br>
                            <input  type="text" class="form-control" placeholder="505.874.112-08" name="cpf_cnpj">
                        </div>
                        <br>
                        <div class="col-md-12">
                        <label for="formFile" class="form-label">Anexo:</label>
                        <input required class="form-control" required type="file" multiple name="file_path">
                        </div>
                        <br>
                        <div class="form-floating">
                        <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Descreva a que se refere o adiantamento:</label>
                        </div>


                            
                        
                        </div>
                    </div>    


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Abrir chamado</button>
                    </div>
                    </div>
                </div>
                </div>         
                </form>  





                <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reembolso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
            <div class="parent" >
              <div class="div1"> 

        <form class="" method="post" action="/abrirChamadoReembolso">
        @csrf
        {{ method_field('POST') }}
        <input type="hidden" id="custId" name="titulo" value="Reembolso">
                            <input type="hidden" id="custId" name="status" value="Criado">
                            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
                            <h3 class="mb-3" style="text-align:center">Reembolso</h3>

                            <p>1º - Detalhar no campo "Descrição" a que se refere o adiantamento. </p>
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
                            <select required id="inputState" name="tipo_pagamento" class="form-select">
                            <option selected>Pix</option>
                            <option>Transferência</option>
                            </select>
                        </div>
                        <br>
                        <div class="col-12">
                            <label f class="form-label">Digite sua chave:</label>
                            <input  type="text" class="form-control" placeholder="Favorecido" name="favorecido">
                            <br>
                            <input  type="text" class="form-control" placeholder="Chave Pix" name="pix">
                        </div>
                        <br>
                        <div class="col-12">
                            <label f class="form-label">Informações de transferência:</label>
                            <input  type="text" class="form-control" placeholder="Banco" name="banco">
                            <br>
                            <input  type="text" class="form-control" placeholder="Favorecido" name="favorecido">
                            <br>
                            <input  type="text" class="form-control" placeholder="Tipo de conta" name="tipo_conta">
                            <br>
                            <input  type="text" class="form-control" placeholder="Agência" name="agencia">
                            <br>
                            <input  type="text" class="form-control" placeholder="Numero de conta" name="conta">
                            <br>
                            <input  type="text" class="form-control" placeholder="505.874.112-08" name="cpf_cnpj">
                        </div>
                        <br>
                        <div class="col-md-12">
                        <label for="formFile" class="form-label">Anexo:</label>
                        <input required class="form-control" required type="file" multiple name="file_path">
                        </div>
                        <br>
                        <div class="form-floating">
                        <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Descreva a que se refere o adiantamento:</label>
                        </div>


                            
                        
                        </div>
                    </div>    


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Abrir chamado</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>          
</body>

                
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-light" style="position:fixed;bottom:0;letf:0;width:100vw;">
                    <p class="col-md-4 mb-0 text-muted">© 2022 Zarpo</p>

                    <a href="https://imgbb.com/"><img src="https://i.ibb.co/S07yz2v/logo-zarpo-320x132-transparente.png" alt="logo-zarpo-320x132-transparente" style="max-width: 100%;height: 60px;margin-left:50px;" border="0"></a>
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    </a>

                    <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="{{ route('indexUser', ['id' => Auth::user()->id]) }}" class="nav-link px-2 text-muted">Meus chamados</a></li>
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-muted">Abrir um chamado</a></li>
                    <li class="nav-item"><a href="{{route('logout')}}" class="nav-link px-2 text-muted">Logout</a></li>
                    </ul>
                </footer>
              
<script>
  $(document).ready(function() {
  $('#inputOculto').hide();
  $('#mySelect').change(function() {
    if ($('#mySelect').val() == 'value2') {
      $('#inputOculto').show();
    } else {
      $('#inputOculto').hide();
    }
  });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</html>