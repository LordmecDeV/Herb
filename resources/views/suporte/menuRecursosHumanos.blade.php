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

.div1 { grid-area: 1 / 2 / 6 / 5; }

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
            <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:50px;margin-left:px;margin-bottom:150px;">
                <div class="col">
                <div class="card w-80 mb-3 shadow p-3  bg-body rounded" style="">
                <img src="{{ asset('imagens/undraw_Synchronize_re_4irq.png')}}" style="height:350px;" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Movimentação de colaborador</h5>
                <p class="card-text"></p>
                <a href="{{route('movimentacao')}}" class="btn btn-primary">Abrir chamado</a>
                </div>
                </div>
                </div>

                <div class="col">
                <div class="card w-80 shadow p-3  bg-body rounded">
                <img src="{{ asset('imagens/undraw_Quitting_time_re_1whp (1).png')}}" style="height:350px;" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Saída de colaborador </h5>
                <p class="card-text"></p>
                <a href="{{route('chamados')}}" class="btn btn-primary">Abrir chamado</a>
                </div>
                </div>
                </div>


                <div class="col">
                <div class="card w-80 shadow p-3 bg-body rounded">
                <img src="{{ asset('imagens/undraw_Designer_re_5v95.png')}}" style="height:350px;" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Entrada de colaborador</h5>
                <p class="card-text"></p>
                <a href="{{route('entradaDeColaboradorMenu')}}" class="btn btn-primary">Abrir chamado</a>

                </div>
                </div>
                </div>
             


                <div class="col">
                <div class="card w-80 shadow p-3  bg-body rounded">
                <img src="{{ asset('imagens/undraw_Air_support_re_nybl.png')}}" style="height:350px;" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Férias</h5>
                <p class="card-text"></p>
                <a href="{{route('feriasChamado')}}" class="btn btn-primary">Abrir chamado</a>
                </div>
                </div>
                </div>

                <div class="col">
                <div class="card w-80 shadow p-3  bg-body rounded">
                <img src="{{ asset('imagens/undraw_Online_payments_re_y8f2.png')}}" style="height:350px;" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Benefícios</h5>
                <p class="card-text"></p>
                <a href="{{route('Abrirbeneficios')}}" class="btn btn-primary">Abrir chamado</a>
                </div>
                </div>
                </div>

                </div>
                </div>

                
</body>

            
              

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</html>