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
                                    <h4 class="card-title" style="flex: 1; text-align: center; margin: 0;">Creación de un Nuevo Usuario</h4>
                                    <a class="btn btn-primary waves-effect waves-float waves-light"
                                        href="{{ route('usuarios.index') }}">Regresar</a>
                                </div>

                                <div class="card-body">
                                    <form id="alertFormulario" action="{{ route('usuarios.store') }}" method="POST">
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
                                                    <button type="button" class="btn-close mb-2" data-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif


                                            <div class="container mt-0">
                                                <section id="multiple-column-form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">

                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="mb-1">
                                                                                <label class="form-label"
                                                                                    for="first-name-column">Nombre
                                                                                    Completo</label>
                                                                                <input type="text" id="name"
                                                                                    class="form-control" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="mb-1">
                                                                                <label class="form-label"
                                                                                    for="last-name-column">DNI</label>
                                                                                <input type="text" id="dni"
                                                                                    class="form-control" name="dni" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="mb-1">
                                                                                <label class="form-label"
                                                                                    for="city-column">Contraseña</label>
                                                                                <input type="password" id="password"
                                                                                    class="form-control" name="password" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="mb-1">
                                                                                <label class="form-label"
                                                                                    for="city-column">Confirmar
                                                                                    Contraseña</label>
                                                                                <input type="password" id="confirmpassword"
                                                                                    class="form-control"
                                                                                    name="confirm-password" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="form-group">
                                                                                <label for="">Roles</label>
                                                                                <select id="roles" name="roles[]" class="form-select"
                                                                                    id="basicSelect" required>
                                                                                    <option value="" disabled
                                                                                        selected>Seleccione</option>
                                                                                    @foreach ($roles as $roleId => $roleName)
                                                                                        <option value="{{ $roleId }}">
                                                                                            {{ $roleName }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                                                            <!-- Added margin-top (mt-2) here -->
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Guardar</button>
                                                                            <button type="reset"
                                                                                class="btn btn-outline-secondary waves-effect">Resetear</button>
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                            </div>
                </section>
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
!-- SWEET ALERTS - FORMULARIO -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const dni = document.getElementById('dni').value;
            const password = document.getElementById('password').value;
            const confirmpassword = document.getElementById('confirmpassword').value;
            const roles = document.getElementById('roles').value;
            
           
           
            if (name.trim() === '') {
                mostrarError('Por favor, Ingrese el Nombre del Usuario. ');
                return;
            }
            if (dni.trim() === '') {
                mostrarError('Por favor, Ingrese el DNI del Usuario. ');
                return;
            }
            if (password.trim() === '') {
                mostrarError('Por favor, Ingrese la Contraseña del Usuario. ');
                return;
            }
            if (confirmpassword.trim() === '') {
                mostrarError('Por favor, Ingrese Nuevamente la Contraseña del Usuario. ');
                return;
            }
            if (roles.trim() === '') {
                mostrarError('Por favor, Ingrese el Rol del Usuario. ');
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
