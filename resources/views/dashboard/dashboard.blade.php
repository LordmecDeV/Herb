@extends('colaboradores.layout')
@section('content')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                function Mudarestado(el) {
  var display = document.getElementById(el).style.display;
  if (display == "none")
    document.getElementById(el).style.display = 'block';
  else
    document.getElementById(el).style.display = 'none';
}
            </script>
                

                <div class="row mt-5">
                <div class="col-sm">

                <div class="card shadow p-2 mb-5 bg-body rounded">
                <h5 style='text-align:center;'>Valor de inventario PC</h5>
                <div class="card-body">
                <button style="text-align:right;" class="btn btn-secondary" type="button" onclick="Mudarestado('minhaDiv')"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
                </button> 
                <h5 class="card-text mt-3 " id="minhaDiv" style="display:none;font-weight: bold;">R$ {{$total_preco_pc}}</h5>   
                </div>
                </div>
                </div>

                <div class="col-sm">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                <h5 style='text-align:center;'>Total PC</h5>
                <div class="card-body">
                <p class="card-text" style='text-align:right;font-weight: bold;' >{{$qtnPc}}</p>
                </div>
                </div>
                </div>

                <div class="col-sm">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                <h5 style='text-align:center;'>Colaboradores</h5>
                <div class="card-body">
                <p class="card-text" style='text-align:right;font-weight: bold;'>{{$colaboradores}}</p>
                </div>
                </div>
                </div>
                </div>


                <div class="col-sm-4">
                    
                

                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                <h5 class="" style="text-align:center;">Status Pc</h5>
                <div class="card-body">
                <canvas id="myChart" width="100" height="100"></canvas>
                <script>


                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                labels: ['Em uso', 'Disponivel', 'Manutenção'],
                datasets: [{
                label: '# of Votes',
                data: [25, 19, 3],
                backgroundColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'RED'
                ],
                borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'RED',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
                }]
                },
                options: {
                scales: {
                y: {
                beginAtZero: true
                }
                }
                }
                });
                </script>
                </div>
                


                <table class="table">

                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Pc's Disponiveis
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Computadores Disponiveis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    @foreach($pcColaborador as $cadastrarPcColaborador)
                                    <ul><li>{{$cadastrarPcColaborador->id_do_pc}}</li></ul>
                                    @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        
                    </div>
                    </div>
                </div>
                </div>

                

@endsection