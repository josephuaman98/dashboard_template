@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
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
                            <h2 class="content-header-title float-start mb-0">Usuario</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('usuarios.index') }}">Usuario</a></li>
                                    <li class="breadcrumb-item active">Usuario</li>
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
                                <h4 class="card-title" style="flex: 1; text-align: center; margin: 0;">Lista de Usuarios Registrados</h4>
                                @can('crear-usuario')    
                                <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('usuarios.create') }}">Nuevo</a>
                                @endcan
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        @if ($errors->any())
                                            <div class="alert alert-dismissible alert-danger fade show text-center"
                                                role="alert">
                                                <ul class="error-list">
                                                    @foreach ($errors->all() as $error)
                                                        <li class="">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                <button type="button" class="btn-close mb-2" data-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif


                                        <div class="container mt-0">
                                            <table id="datatable" class="table">
                                                <thead>
                                                    <th style="color:black;">ID</th>
                                                    <th style="color:black;">Nombre</th>
                                                    <th style="color:black;">DNI</th>
                                                    <th style="color:black;">Rol</th>
                                                    <th style="color:black;">Acciones</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($usuarios as $usuario)
                                                        <tr>
                                                            <td style="display:black">{{ $usuario->id }}</td>
                                                            <td style="display:black">{{ $usuario->name }}</td>
                                                            <td style="display:black">{{ $usuario->dni }}</td>
                                                            <td style="display:black">
                                                                @if (!empty($usuario->getRoleNames()))
                                                                    @foreach ($usuario->getRoleNames() as $rolNombre)
                                                                        <h5><span class="badge badge-light-success">{{ $rolNombre }}</span>
                                                                        </h5>
                                                                    @endforeach
                                                                @endif
                                                            </td>

                                                            <td style="display:black">
                                                                @can('editar-usuario')
                                                                <a class="btn btn-warning waves-effect waves-float waves-light"
                                                                    href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                                                                @endcan 
                                                                
                                                                @can('borrar-usuario')
                                                                <form method="POST"
                                                                    action="{{ route('usuarios.destroy', $usuario->id) }}"
                                                                    style="display:inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger waves-effect waves-float waves-light">Borrar</button>
                                                                </form>
                                                                @endcan
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
<!-- <script src="{{asset('archivo/jquery-3.7.1.js')}}" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->

 <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> 
<!-- <script src="{{asset('archivo/jquery.dataTables.min.js')}}"></script> -->

 <script src="//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json"></script> 
<!-- <script src="{{asset('archivo/es-ES.json')}}"></script> -->


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
            
        });
    });
</script>

<script src="{{asset('archivo/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('archivo/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection