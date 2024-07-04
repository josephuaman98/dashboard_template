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
                                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Usuario</a></li>
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
                                <h4 class="card-title" style="flex: 1; text-align: center; margin: 0;">Creación de un
                                    Nuevo Usuario</h4>
                                <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('roles.index') }}">Regresar</a>
                            </div>

                            <div class="card-body">
                                <form id="alertFormulario" method="POST" action="{{ route('roles.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="">Nombre del Rol:</label>
                                                <input type="text" id="name" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="">Permisos para este Rol:</label>
                                                <br />
                                                @foreach($permission as $value)
                                                <label>
                                                    <input type="checkbox" id="permission" name="permission[]" value="{{ $value->id }}" class="name">
                                                    {{ $value->name }}
                                                </label>
                                                <br />
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
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

<!-- SWEET ALERTS - FORMULARIO -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            
           
           
            if (name.trim() === '') {
                mostrarError('Por favor, Ingrese el NOMBRE del Rol. ');
                return;
            }
           




            Swal.fire({
                title: '¿Estás seguro de que deseas enviar el formulario?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Sí',
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#6c757d',
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-secondary',
                },
            }).then((result) => {
                if (result.value) {
                    form.submit();

                    Swal.fire({
                        title: 'Registrado con éxito',
                        text: 'Tu formulario ha sido enviado correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Ok',
                        confirmButtonColor: '#28a745',
                        customClass: {
                            confirmButton: 'btn btn-success',
                        },
                    });
                } else {
                    // Puedes agregar más lógica aquí si el usuario hace clic en "Cancelar"
                }
            });
        });

        function mostrarError(mensaje) {
            Swal.fire({
                title: 'Error',
                text: mensaje,
                icon: 'error',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#dc3545',
                customClass: {
                    confirmButton: 'btn btn-danger',
                },
            });
        }
    });
</script>

@endsection