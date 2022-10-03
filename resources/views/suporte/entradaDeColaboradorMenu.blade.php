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
                <h5 class="card-title">Admissão
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
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
                <h5 class="card-title">Acessos e equipamento
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
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
                        <h5 class="modal-title" id="exampleModalLabel">Solicitação de admissão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="parent" >
                        <div class="div1"> 

                        <form class="" method="post" enctype="multipart/form-data" action="/abrirChamadoAdmissao">
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
                            <option>Outros</option>
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
                    <h5 class="modal-title" id="exampleModalLabel">Acessos e equipamento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
            <div class="parent" >
              <div class="div1"> 

        <form class="" method="post" action="/criarChamadoEntradaDeColaborador">
        @csrf
        {{ method_field('POST') }}
            <input type="hidden" id="custId" name="titulo" value="Entrada De Colaborador">
            <input type="hidden" id="custId" name="status" value="Criado">
            <input type="hidden" name="colaboradorID" value="{{Auth::user()->email}}">
            <h3 class="mb-3" style="text-align:center">Acessos e equipamento</h3>




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
            <label f class="form-label">Acessos:</label>
            <input required type="text" class="form-control" placeholder="Magento, Zio, MicroSip..." name="sistemas">
        </div>
        <br>
        <div class="col-12">
            <label class="form-label">Data de entrada:</label>
            <input required type="date" class="form-control" name="data_de_entrada">
        </div>
        <br>
        <div class="col-md-12">
            <label for="" class="form-label">VPN:</label>
            <select required id="inputState" name="vpn" class="form-select">
            <option selected>Sim</option>
            <option>Não</option>
            </select>
        </div>
        <br>
        <div class="col-md-12">
        <label for="inputState" class="form-label">Grupo de email:</label>
        <input required type="text" class="form-control" placeholder="Ex: gestores, tech table..." name="grupos_email">
        </div>
        <br>
        <div class="form-floating">
        <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="observacao" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Observação</label>
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