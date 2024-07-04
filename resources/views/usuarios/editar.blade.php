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
                                <li class="breadcrumb-item"><a href="index.html">Usuario</a></li>
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
                    <h4 class="card-title" style="flex: 1; text-align: center; margin: 0;">Editamos un Usuario Registrado</h4>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('usuarios.index') }}">Regresar</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
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
                                <section id="multiple-column-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="first-name-column">Nombre Completo</label>
                                                                <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="last-name-column">Correo</label>
                                                                <input type="text" id="dni" class="form-control" name="dni" value="{{ $user->dni }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="city-column">Contraseña</label>
                                                                <input type="password" id="password" class="form-control" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="city-column">Confirmar Contraseña</label>
                                                                <input type="password" id="confirm-password" class="form-control" name="confirm-password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="">Roles</label>
                                                                <select name="roles[]" class="form-select" id="basicSelect">
                                                                    <option value="" disabled selected>Seleccione</option>
                                                                    @foreach ($roles as $roleId => $roleName)
                                                                        <option value="{{ $roleId }}" @if(in_array($roleId, $userRole)) selected @endif>{{ $roleName }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                                            <!-- Added margin-top (mt-2) here -->
                                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                                            <button type="reset" class="btn btn-outline-secondary waves-effect">Resetear</button>
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
