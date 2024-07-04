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
                        <h2 class="content-header-title float-start mb-0">Roles</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                @can('crear-rol')
                                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                                @endcan
                                <li class="breadcrumb-item active">Rol</li>
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
                                <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('roles.create') }}">Nuevo</a>
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
                                                    <th style="color:black;">Rol</th>
                                                    <th style="color:black;">Acciones</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($roles as $role)
                                                        <tr>
                                                            <td style="display:black">{{ $role->id  }}</td>
                                                            <td style="display:black">{{ $role->name }}</td>
                                                            
                                                            <td style="display:black">
                                                                @can('editar-rol')
                                                                <a class="btn btn-warning waves-effect waves-float waves-light"
                                                                href="{{ route('roles.edit',$role->id) }}">Editar</a>
                                                                @endcan 
                                                                
                                                                @can('borrar-rol')
                                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                                {!! Form::close() !!}
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
<script src="{{asset('archivo/jquery-3.7.1.js')}}" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{asset('archivo/jquery.dataTables.min.js')}}"></script>
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
            
        });
    });
</script>
@endsection



