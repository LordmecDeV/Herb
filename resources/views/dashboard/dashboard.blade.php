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


    <div class="container text-center">

            <div class="row mt-5">
            <div class="col-sm-5 shadow-lg p-3 mb-5 bg-body rounded" >
                <h5>Status Pc</h5>
            <canvas id="myChart" width="400" height="400"></canvas>
            <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Manutenção', 'Disponivel', 'Em uso'],
                    datasets: [{
                        label: 'Estoque pc',
                        data: [{{$statuspc}}, {{$statuspcEmUso}}, {{$statuspcManutencao}} ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
            </div>

            <div class="col-sm-6 shadow-lg p-3 mb-5 bg-body rounded" style="margin-left:50px;">
            <h5>Chamados</h5>
            <canvas id="myChart2" width="400" height="400"></canvas>
            <script>
            const ctx1 = document.getElementById('myChart2').getContext('2d');
            const myChart2 = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['Criado', 'Concluido', 'Em andamento'],
                    datasets: [{
                        label: 'Status do chamado',
                        data: [{{$statusChamado}}, {{$statusEmAndamento}}, {{$statusConcluido}}],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
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
            </div>

            <div class="row mt-5">
            <div class="col">
            
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

            <div class="col">
            <div class="card shadow p-3 mb-5 bg-body rounded">
            <h5 style='text-align:center;'>Total PC</h5>
            <div class="card-body">
            <p class="card-text" style='text-align:right;font-weight: bold;' >{{$qtnPc}}</p>
            </div>
            </div>

            </div>

            <div class="col">
            <div class="card shadow p-3 mb-5 bg-body rounded">
            <h5 style='text-align:center;'>Colaboradores</h5>
            <div class="card-body">
            <p class="card-text" style='text-align:right;font-weight: bold;'>{{$colaboradores}}</p>
            </div>
            </div>

            </div>

    </div>
    </div>

                

@endsection