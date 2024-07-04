@section('css')

@endsection

@extends('plantilla.layouts.panel')


@section('panel_blanco')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Dashboard</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Menu Principal</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Menu</a>
                                </li>
                                <li class="breadcrumb-item active">Graficos
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <!-- Input Mask start -->
            <section id="input-mask-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                                
                            </div>
                            



                             <div class="card-body">
                                <div class="row">
                                
                                    <img src="{{asset('/images/imagenes/portada.jpg')}}" alt="Tu Logo" style="width: 1500px; height: auto; display: block; margin: 0 auto;">
                                    <!-- <div>
                                        <canvas id="myChart" width="1500" height="500"></canvas>
                                    </div> -->

                                </div>
                            </div> 

                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Mask End -->

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const ActaConstancia = @json($ActaConstancia);
    const NotificacionPreventiva = @json($NotificacionPreventiva);
    const ActaEjecucionMedidaPreventiva = @json($ActaEjecucionMedidaPreventiva);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ActaConstancia.map(data => data.tipo_documento),
            datasets: [{
                label: 'Acta Constatación',
                data: ActaConstancia.map(data => data.cantidad),
                backgroundColor: ['rgba(255, 99, 132, 0.2)'],
                borderColor:['rgb(255, 99, 132)'],
                borderWidth: 2,
            }, {
                label: 'Notificacion Preventiva',
                data: NotificacionPreventiva.map(data => data.cantidad),
                backgroundColor: ['rgba(255, 159, 64, 0.2)'],
                borderColor:['rgb(255, 159, 64)'],
                borderWidth: 2,
            }, {
                label: 'Acta Ejecucion Medida Preventiva',
                data: ActaEjecucionMedidaPreventiva.map(data => data.cantidad),
                backgroundColor: ['rgba(153, 102, 255, 0.2)'],
                borderColor:['rgb(153, 102, 255)'],
                borderWidth: 2,
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
</script> -->



@endsection