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
                        <h2 class="content-header-title float-start mb-0">Lista de Notificación</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Lista de Notificación</a>
                                </li>
                                <li class="breadcrumb-item active">Notificación
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
                                <!-- <a class="btn btn-primary" href="{{ route('notificacion.create') }}" role="button"><i data-feather="plus" class="icon-noti"></i>Agregar </a> -->
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
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">Fecha</th>
                                                        <th scope="col"> Hora</th>
                                                        <th scope="col">Tipo Intervención</th>
                                                        <th scope="col">Usuario</th>
                                                        <th scope="col">Archivo</th>
                                                        <th scope="col">Estado</th>
                                                        <th scope="col">Pre-Visualizacion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($notificaciones as $notificacion)
                                                    <tr>
                                                        <td>{{ $notificacion->id }}</td>
                                                        <td> {{ $notificacion->codigo }} </td>
                                                        <td>{{ $notificacion->fecha }}</td>
                                                        <td>{{ $notificacion->hora }}</td>
                                                        <td>{{ $notificacion->tipoIntervencion->nombre }}</td>
                                                        <td>{{ $notificacion->users->name }}</td>
                                                        <td>
                                                            @foreach ($notificacion->imagen as $imagen)
                                                            @if($imagen->estado == 1)
                                                            <a href="{{ route('formulario.anonimus', $imagen) }}" target="_self" class="btn btn-sm btn-primary">
                                                                <i class="fa fa-eye"></i>
                                                                {{ $imagen->tipo_documento }}
                                                            </a>
                                                            @else
                                                            <!-- Puedes agregar contenido o lógica aquí para el caso contrario si es necesario -->
                                                            @endif
                                                            @endforeach
                                                        </td>

                                                        <td>
                                                     
                                                        @if ($notificacion->imagen->where('estado',1)->count() < 1)

                                                        <button type="button" class="btn btn-success"> REGISTRADO</button>
                                                          

                                                            @else

                                                            <button type="button" class="btn btn-danger"> PENDIENTE</button>

                                                            <!-- Puedes agregar contenido o lógica aquí para el caso contrario si es necesario -->
                                                            @endif
                                                        
                                                            
                                                        </td>


                                                        <!-- OJO / PREVISUALIZACION   tooltips-->
                                                        <td>
                                                        
    @foreach ($notificacion->imagen as $imagen)
        @if($imagen->estado)
        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalImagen{{ $imagen->id }}" data-bs-placement="bottom" title="{{ $imagen->tipo_documento }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
        </button>
            <!-- Modal de Imagen -->
            <div class="modal fade" id="modalImagen{{ $imagen->id }}" tabindex="-1" aria-labelledby="myModalLabelImagen{{ $imagen->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabelImagen{{ $imagen->id }}"> {{ $imagen->tipo_documento }}</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="col-md-12 text-center">
                                    <img src="{{ $imagen->foto }}" alt="Foto de la notificación" class="img-fluid" style="max-width: 100%; max-height: 80vh;"> <!-- Ajustamos el tamaño máximo de la imagen -->
                                </div>
                            </div>
                            <!-- Aquí puedes agregar más detalles de la imagen si lo deseas -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach


                                                            <!-- DOCUMENTO INFORME / PRE-VISUALIZACION -->
                                                            @foreach ($notificacion->informe as $informe)
                                                            @if ($informe->foto)
                                                            <!-- Botón para abrir el modal -->
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{$informe->id}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                            </button>
                                                            <!-- Modal correspondiente -->
                                                            <div class="modal fade" id="exampleModal{{$informe->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal{{$informe->id}}Title" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document"> <!-- Agregando la clase modal-lg aquí -->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModal{{$informe->id}}Title">Información del Informe</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
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

<!-- 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

<script src="{{asset('archivo/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('archivo/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




@endsection