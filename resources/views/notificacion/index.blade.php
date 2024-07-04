@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<style>
    .icon-noti {
        margin-right: 9px;
        height: 16px;
        width: 16px;
    }
</style>
@endsection

@extends('plantilla.layouts.panel')

@section('panel_blanco')



<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Registro de notificación</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Registro de notificación</a>
                                </li>

                                <li class="breadcrumb-item active">Registro
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

                            <div class="card-header" style="display: flex; align-items: center;">
                                <a class="btn btn-primary" href="{{ route('notificacion.create') }}" role="button"><i data-feather="plus" class="icon-noti"></i>Agregar </a>
                                <h4 class="card-title" style="flex: 1; text-align: center; margin: 0;">Notificaciones Registradas</h4>

                            </div>


                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        @if ($errors->any())
                                        <div class="alert alert-dismissible alert-danger fade show text-center" role="alert">
                                            <ul class="error-list">
                                                @foreach ($errors->all() as $error)
                                                <li class="">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn-close mb-2" data-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif


                                        <div class="container mt-0">
                                            <table id="datatable">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th scope="col">ID</th>
                                                        <th scope="col"> Codigo </th>
                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Hora</th>
                                                        <th scope="col">Tipo Intervención</th>
                                                        <th scope="col">Usuario</th>
                                                        <th scope="col">Estado Informe</th>
                                                        <th scope="col">Acciones</th>



                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($notificaciones as $notificacion)
                                                    <tr>
                                                        <td>{{ $notificacion->id }} </td>
                                                        <td>{{ $notificacion->codigo }}</td>
                                                        <td>{{ $notificacion->fecha }}</td>
                                                        <td>{{ $notificacion->hora }}</td>
                                                        <td>{{ $notificacion->tipoIntervencion->nombre }}</td>
                                                        <td>{{ $notificacion->users->name }}</td>
                                                        <td>

                                                            @if($notificacion->informe->count() > 0)
                                                            <button type="button" class="btn btn-success">Registrado</button>
                                                            @else
                                                            <button type="button" class="btn btn-danger">Pendiente</button>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($notificacion->informe->count() > 0)
                                                            <button type="button" class="btn btn-icon btn-success waves-effect waves-float waves-light" data-toggle="modal" data-target="#exampleModal{{$notificacion->informe[0]->id}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </button>
                                                            @else
                                                            <a href="{{ route('notificacion.createInforme', $notificacion->id) }}" class="btn btn-primary" role="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> <!-- Icono -->
                                                            </a>


                                                            @endif

                                                            @foreach ($notificacion->informe as $informe)
                                                            @if ($informe->foto)
                                                            <!-- Modal correspondiente -->
                                                            <div class="modal fade" id="exampleModal{{$informe->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal{{$informe->id}}Title" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document"> <!-- Agregando la clase modal-lg aquí -->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModal{{$informe->id}}Title">Informe</h5>

                                                                        </div>
                                                                        <div class="modal-body text-center"> <!-- Agregar la clase text-center para centrar la imagen -->
                                                                            <!-- Contenido del modal -->
                                                                            <img src="{{ $informe->foto }}" alt="Foto del informe" class="img-fluid"> <!-- Agregando la clase img-fluid para hacer la imagen responsive -->
                                                                            <!-- Aquí puedes agregar más detalles del informe si lo deseas -->
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach

                                                        </td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </form>

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
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
<script src="{{asset('archivo/jquery-3.7.1.js')}}" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> -->
<script src="{{asset('archivo/jquery.dataTables.min.js')}}"></script>

<!-- <script src="//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json"></script> -->
<script src="{{asset('archivo/es-ES.json')}}"></script>


<script>
    $(document).ready(function() {

        $('#datatable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
            },
            lengthMenu: [
                [5, 10, 25, 50, 75, 100, -1],
                [5, 10, 25, 50, 75, 100, 'Todos']
            ], // El primero lo que va hacer y el segundo lo que se va mostrar
            pageLength: 5,
            order: [
                [0, 'desc']

            ]
        });
    });
</script>

<script src="{{asset('archivo/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('archivo/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection