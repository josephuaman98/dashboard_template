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
                            <h2 class="content-header-title float-start mb-0">Notificación de Cargo</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> </a>
                                    </li>

                                    <li class="breadcrumb-item active">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Input Mask start -->
            <section id="input-mask-wrapper">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-body"><!-- Basic Horizontal form layout section start -->
                        <section id="basic-horizontal-layouts">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="card">

                                        <section class="modern-horizontal-wizard">
                                            <form id="alertFormulario" method="POST"
                                                action="{{ route('formulario.store') }}">
                                                @csrf
                                                <input type="hidden" name="notificacions_id"
                                                    value="{{ $notificacions->id }}">
                                                <div class="bs-stepper wizard-modern modern-wizard-example">
                                                    <div class="bs-stepper-header">
                                                        <div class="step crossed" data-target="#account-details-modern"
                                                            role="tab" id="account-details-modern-trigger">
                                                            <button type="button" class="step-trigger"
                                                                aria-selected="false">
                                                                <span class="bs-stepper-box">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-file-text font-medium-3">
                                                                        <path
                                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                        </path>
                                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                                        <line x1="16" y1="13" x2="8"
                                                                            y2="13"></line>
                                                                        <line x1="16" y1="17" x2="8"
                                                                            y2="17"></line>
                                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                                    </svg>
                                                                </span>
                                                                <span class="bs-stepper-label">
                                                                    <span class="bs-stepper-title">DATOS DEL
                                                                        INFRACTOR</span>
                                                                    <span class="bs-stepper-subtitle">- - - - - - - - - - -
                                                                        - -
                                                                        - - - - - - - - - -</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div class="line">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-right font-medium-2">
                                                                <polyline points="9 18 15 12 9 6"></polyline>
                                                            </svg>
                                                        </div>
                                                        <div class="step active" data-target="#personal-info-modern"
                                                            role="tab" id="personal-info-modern-trigger">
                                                            <button type="button" class="step-trigger"
                                                                aria-selected="true">
                                                                <span class="bs-stepper-box">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-user font-medium-3">
                                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                        </path>
                                                                        <circle cx="12" cy="7" r="4">
                                                                        </circle>
                                                                    </svg>
                                                                </span>
                                                                <span class="bs-stepper-label">
                                                                    <span class="bs-stepper-title">INFRACCIÓN
                                                                        DETECTADA</span>
                                                                    <span class="bs-stepper-subtitle">- - - - - - - - - - -
                                                                        - -
                                                                        - - - - - - - - - - -</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div class="line">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-right font-medium-2">
                                                                <polyline points="9 18 15 12 9 6"></polyline>
                                                            </svg>
                                                        </div>
                                                        <div class="step" data-target="#address-step-modern"
                                                            role="tab" id="address-step-modern-trigger">
                                                            <button type="button" class="step-trigger"
                                                                aria-selected="false">
                                                                <span class="bs-stepper-box">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-map-pin font-medium-3">
                                                                        <path
                                                                            d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z">
                                                                        </path>
                                                                        <circle cx="12" cy="10" r="3">
                                                                        </circle>
                                                                    </svg>
                                                                </span>
                                                                <span class="bs-stepper-label">
                                                                    <span class="bs-stepper-title">NOTIFICACIÓN</span>
                                                                    <span class="bs-stepper-subtitle">- - - - - - - - - - -
                                                                        - -
                                                                        - - - - - - - - - -</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div class="line">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-right font-medium-2">
                                                                <polyline points="9 18 15 12 9 6"></polyline>
                                                            </svg>
                                                        </div>
                                                        <div class="step" data-target="#social-links-modern"
                                                            role="tab" id="social-links-modern-trigger">
                                                            <button type="button" class="step-trigger"
                                                                aria-selected="false">
                                                                <span class="bs-stepper-box">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-link font-medium-3">
                                                                        <path
                                                                            d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                                                        </path>
                                                                        <path
                                                                            d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="bs-stepper-label">
                                                                    <span class="bs-stepper-title">DATOS DEL
                                                                        INFRACTOR</span>
                                                                    <span class="bs-stepper-subtitle">- - - - - - - - - - -
                                                                        - -
                                                                        - - - - - - - - - -</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="bs-stepper-content">
                                                        <div id="account-details-modern" class="content" role="tabpanel"
                                                            aria-labelledby="account-details-modern-trigger">
                                                            <div class="row">
                                                                <div class="mb-1 col-md-3">
                                                                    <label class="form-label" for="modern-username">Tipo
                                                                        de
                                                                        Doc.</label>
                                                                    <select id="tipo_documento" name="tipo_documento"
                                                                        class="form-select">
                                                                        <!-- Add your options here -->
                                                                        <option value="1">RUC</option>
                                                                        <option value="2">DNI</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                                <div class="mb-1 col-md-3">
                                                                    <label class="form-label">N° de Doc.</label>
                                                                    <input type="text" id="documento" name="documento"
                                                                        class="form-control" placeholder=""
                                                                        aria-label="john.doe">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="modern-email">N°
                                                                        Licencia
                                                                        de Funcionamiento</label>
                                                                    <input type="text" id="licencia_funcionamiento"
                                                                        name="licencia_funcionamiento"
                                                                        class="form-control" placeholder=""
                                                                        aria-label="john.doe">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label">Apellido, Nombre,
                                                                        Denominación
                                                                        Y/O Razón Social</label>
                                                                    <input type="text" name="razon_social"
                                                                        id="razon_social" class="form-control"
                                                                        aria-label="john.doe">
                                                                </div>
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label">Domicilio</label>
                                                                    <input type="text" name="domicilio" id="domicilio"
                                                                        class="form-control" aria-label="john.doe">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label"
                                                                        for="modern-username">G</label>
                                                                    <select id="giro" name="giro"
                                                                        class="form-select">
                                                                        @foreach ($giros as $giro)
                                                                            <option value="{{ $giro->nombre }}" selected>
                                                                                {{ $giro->nombre }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-outline-secondary btn-prev waves-effect"
                                                                    disabled="" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="personal-info-modern"
                                                            class="content active dstepper-block" role="tabpanel"
                                                            aria-labelledby="personal-info-modern-trigger">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="modern-username">Codigo</label>
                                                                        <select id="select1" name="codigo"
                                                                            class="form-select">
                                                                            @foreach ($codigos as $id => $codigo)
                                                                                <option value="{{ $codigo }}"
                                                                                    selected>{{ $codigo }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="first-name">Monto
                                                                            Posible a Multa S/.</label>
                                                                        <input type="text" name="monto_posible_multa"
                                                                            id="monto_posible_multa" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="first-name">Descripción</label>
                                                                        <input type="text" name="descripcion"
                                                                            id="descripcion" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label" for="first-name">Medida
                                                                        Complementaria</label>
                                                                    <input type="text" name="medida_complementaria"
                                                                        id="medida_complementaria" class="form-control"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label"
                                                                        for="first-name">Lugar</label>
                                                                    <input type="text" name="lugar" id="lugar"
                                                                        class="form-control">
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="first-name">Placa de
                                                                        Rodaje
                                                                        N°</label>
                                                                    <input type="text" name="placa_de_rodaje"
                                                                        id="placa_de_rodaje" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="fecha-medida">Fecha de
                                                                        Detección</label>
                                                                    <input type="date" name="fecha_deteccion"
                                                                        id="fecha_deteccion" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="hora-medida">Hora de
                                                                        Detección</label>
                                                                    <input type="time" name="hora_deteccion"
                                                                        id="hora_deteccion" class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="address-step-modern" class="content" role="tabpanel"
                                                            aria-labelledby="address-step-modern-trigger">
                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="fecha-medida">Fecha de
                                                                        Notificación</label>
                                                                    <input type="date" name="fecha_notificacion"
                                                                        id="fecha_notificacion" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="hora-medida">Hora de
                                                                        Notificación</label>
                                                                    <input type="time" name="hora_notificacion"
                                                                        id="hora_notificacion" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="social-links-modern" class="content" role="tabpanel"
                                                            aria-labelledby="social-links-modern-trigger">

                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label"
                                                                        for="first-name">Nombres</label>
                                                                    <input type="text" name="nombres" id="nombres"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label"
                                                                        for="first-name">Apellidos</label>
                                                                    <input type="text" name="apellidos" id="apellidos"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="first-name">Relación
                                                                        del
                                                                        Infractor</label>
                                                                    <input type="text" name="relacion_del_infractor"
                                                                        id="relacion_del_infractor" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="first-name">N°
                                                                        deDocumento</label>
                                                                    <input type="text" name="numero_documento"
                                                                        id="numero_documento" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>

                                                                <button
                                                                    class="btn btn-success btn-prev waves-effect waves-float waves-light"
                                                                    type="submit">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Registrar</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </section>

                                    </div>
                                </div>

                                <!-- SEGUNDA COLUMNA - VISTA DE FOTOGRAFIA  -->

                                <div class="col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="text-center">
                                                <p class="card-title">PREVISUALIZACIÓN DE LA FOTOGRAFÍA</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <img src="{{ asset($notificacions->foto) }}"
                                                        alt="Foto de la notificación" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </section>
                    </div>
                </div>

        </div>
        </section>
    </div>


    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">ACTA DE CONSTATACIÓN</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"></a>
                                    </li>

                                    <li class="breadcrumb-item active">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Input Mask start -->
            <section id="input-mask-wrapper">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-body"><!-- Basic Horizontal form layout section start -->
                        <section id="basic-horizontal-layouts">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="card">

                                        <section class="modern-horizontal-wizard">
                                            <form id="alertFormulario" method="POST"
                                                action="{{ route('formulario.store') }}">
                                                @csrf
                                                <input type="hidden" name="notificacions_id"
                                                    value="{{ $notificacions->id }}">
                                                <div class="bs-stepper wizard-modern modern-wizard-example">
                                                    <div class="bs-stepper-header">
                                                        
                                                        
                                                    <div class="bs-stepper-content">
                                                        <div id="account-details-modern" class="content" role="tabpanel"
                                                            aria-labelledby="account-details-modern-trigger">
                                                            <div class="row">
                                                                <div class="mb-1 col-md-3">
                                                                    <label class="form-label" for="modern-username">Tipo
                                                                        de
                                                                        Doc.</label>
                                                                    <select id="tipo_documento" name="tipo_documento"
                                                                        class="form-select">
                                                                        <!-- Add your options here -->
                                                                        <option value="1">RUC</option>
                                                                        <option value="2">DNI</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                                <div class="mb-1 col-md-3">
                                                                    <label class="form-label">N° de Doc.</label>
                                                                    <input type="text" id="documento" name="documento"
                                                                        class="form-control" 
                                                                        aria-label="">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="modern-email">N°
                                                                        Licencia
                                                                        de Funcionamiento</label>
                                                                    <input type="text" id="licencia_funcionamiento"
                                                                        name="licencia_funcionamiento"
                                                                        class="form-control" placeholder=""
                                                                        aria-label="john.doe">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label">Apellido, Nombre,
                                                                        Denominación
                                                                        Y/O Razón Social</label>
                                                                    <input type="text" name="razon_social"
                                                                        id="razon_social" class="form-control"
                                                                        aria-label="john.doe">
                                                                </div>
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label">Domicilio</label>
                                                                    <input type="text" name="domicilio" id="domicilio"
                                                                        class="form-control" aria-label="john.doe">
                                                                </div>
                                                            </div>
                                                            


                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-outline-secondary btn-prev waves-effect"
                                                                    disabled="" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="personal-info-modern"
                                                            class="content active dstepper-block" role="tabpanel"
                                                            aria-labelledby="personal-info-modern-trigger">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="modern-username">Codigo</label>
                                                                        <select id="select1" name="codigo"
                                                                            class="form-select">
                                                                            @foreach ($codigos as $id => $codigo)
                                                                                <option value="{{ $codigo }}"
                                                                                    selected>{{ $codigo }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="first-name">Monto
                                                                            Posible a Multa S/.</label>
                                                                        <input type="text" name="monto_posible_multa"
                                                                            id="monto_posible_multa" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="first-name">Descripción</label>
                                                                        <input type="text" name="descripcion"
                                                                            id="descripcion" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label" for="first-name">Medida
                                                                        Complementaria</label>
                                                                    <input type="text" name="medida_complementaria"
                                                                        id="medida_complementaria" class="form-control"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label"
                                                                        for="first-name">Lugar</label>
                                                                    <input type="text" name="lugar" id="lugar"
                                                                        class="form-control">
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="first-name">Placa de
                                                                        Rodaje
                                                                        N°</label>
                                                                    <input type="text" name="placa_de_rodaje"
                                                                        id="placa_de_rodaje" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="fecha-medida">Fecha de
                                                                        Detección</label>
                                                                    <input type="date" name="fecha_deteccion"
                                                                        id="fecha_deteccion" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="hora-medida">Hora de
                                                                        Detección</label>
                                                                    <input type="time" name="hora_deteccion"
                                                                        id="hora_deteccion" class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="address-step-modern" class="content" role="tabpanel"
                                                            aria-labelledby="address-step-modern-trigger">
                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="fecha-medida">Fecha de
                                                                        Notificación</label>
                                                                    <input type="date" name="fecha_notificacion"
                                                                        id="fecha_notificacion" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="hora-medida">Hora de
                                                                        Notificación</label>
                                                                    <input type="time" name="hora_notificacion"
                                                                        id="hora_notificacion" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="social-links-modern" class="content" role="tabpanel"
                                                            aria-labelledby="social-links-modern-trigger">

                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label"
                                                                        for="first-name">Nombres</label>
                                                                    <input type="text" name="nombres" id="nombres"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label"
                                                                        for="first-name">Apellidos</label>
                                                                    <input type="text" name="apellidos" id="apellidos"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="first-name">Relación
                                                                        del
                                                                        Infractor</label>
                                                                    <input type="text" name="relacion_del_infractor"
                                                                        id="relacion_del_infractor" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="first-name">N°
                                                                        deDocumento</label>
                                                                    <input type="text" name="numero_documento"
                                                                        id="numero_documento" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>

                                                                <button
                                                                    class="btn btn-success btn-prev waves-effect waves-float waves-light"
                                                                    type="submit">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Registrar</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </section>

                                    </div>
                                </div>

                                <!-- SEGUNDA COLUMNA - VISTA DE FOTOGRAFIA  -->

                                <div class="col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="text-center">
                                                <p class="card-title">PREVISUALIZACIÓN DE LA FOTOGRAFÍA</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <img src="{{ asset($notificacions->foto) }}"
                                                        alt="Foto de la notificación" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </section>
                    </div>
                </div>

        </div>
        </section>

</div>
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">ACTA DE EJECUCIÓN DE MEDIDA PROVISIONAL</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"></a>
                                    </li>

                                    <li class="breadcrumb-item active">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Input Mask start -->
            <section id="input-mask-wrapper">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-body"><!-- Basic Horizontal form layout section start -->
                        <section id="basic-horizontal-layouts">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="card">

                                        <section class="modern-horizontal-wizard">
                                            <form id="alertFormulario" method="POST"
                                                action="{{ route('formulario.store') }}">
                                                @csrf
                                                <input type="hidden" name="notificacions_id"
                                                    value="{{ $notificacions->id }}">
                                                <div class="bs-stepper wizard-modern modern-wizard-example">
                                                    <div class="bs-stepper-header">
                                                        
                                                        
                                                    <div class="bs-stepper-content">
                                                        <div id="account-details-modern" class="content" role="tabpanel"
                                                            aria-labelledby="account-details-modern-trigger">
                                                            <div class="row">
                                                                <div class="mb-1 col-md-3">
                                                                    <label class="form-label" for="modern-username">Tipo
                                                                        de
                                                                        Doc.</label>
                                                                    <select id="tipo_documento" name="tipo_documento"
                                                                        class="form-select">
                                                                        <!-- Add your options here -->
                                                                        <option value="1">RUC</option>
                                                                        <option value="2">DNI</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                                <div class="mb-1 col-md-3">
                                                                    <label class="form-label">N° de Doc.</label>
                                                                    <input type="text" id="documento" name="documento"
                                                                        class="form-control" placeholder=""
                                                                        aria-label="john.doe">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="modern-email">N°
                                                                        Licencia
                                                                        de Funcionamiento</label>
                                                                    <input type="text" id="licencia_funcionamiento"
                                                                        name="licencia_funcionamiento"
                                                                        class="form-control" placeholder=""
                                                                        aria-label="john.doe">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label">Apellido, Nombre,
                                                                        Denominación
                                                                        Y/O Razón Social</label>
                                                                    <input type="text" name="razon_social"
                                                                        id="razon_social" class="form-control"
                                                                        aria-label="john.doe">
                                                                </div>
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label">Domicilio</label>
                                                                    <input type="text" name="domicilio" id="domicilio"
                                                                        class="form-control" aria-label="john.doe">
                                                                </div>
                                                            </div>
                                                            


                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-outline-secondary btn-prev waves-effect"
                                                                    disabled="" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="personal-info-modern"
                                                            class="content active dstepper-block" role="tabpanel"
                                                            aria-labelledby="personal-info-modern-trigger">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="modern-username">Codigo</label>
                                                                        <select id="select1" name="codigo"
                                                                            class="form-select">
                                                                            @foreach ($codigos as $id => $codigo)
                                                                                <option value="{{ $codigo }}"
                                                                                    selected>{{ $codigo }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="first-name">Monto
                                                                            Posible a Multa S/.</label>
                                                                        <input type="text" name="monto_posible_multa"
                                                                            id="monto_posible_multa" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="first-name">Descripción</label>
                                                                        <input type="text" name="descripcion"
                                                                            id="descripcion" class="form-control"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label" for="first-name">Medida
                                                                        Complementaria</label>
                                                                    <input type="text" name="medida_complementaria"
                                                                        id="medida_complementaria" class="form-control"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label"
                                                                        for="first-name">Lugar</label>
                                                                    <input type="text" name="lugar" id="lugar"
                                                                        class="form-control">
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="first-name">Placa de
                                                                        Rodaje
                                                                        N°</label>
                                                                    <input type="text" name="placa_de_rodaje"
                                                                        id="placa_de_rodaje" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="fecha-medida">Fecha de
                                                                        Detección</label>
                                                                    <input type="date" name="fecha_deteccion"
                                                                        id="fecha_deteccion" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-4">
                                                                    <label class="form-label" for="hora-medida">Hora de
                                                                        Detección</label>
                                                                    <input type="time" name="hora_deteccion"
                                                                        id="hora_deteccion" class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="address-step-modern" class="content" role="tabpanel"
                                                            aria-labelledby="address-step-modern-trigger">
                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="fecha-medida">Fecha de
                                                                        Notificación</label>
                                                                    <input type="date" name="fecha_notificacion"
                                                                        id="fecha_notificacion" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="hora-medida">Hora de
                                                                        Notificación</label>
                                                                    <input type="time" name="hora_notificacion"
                                                                        id="hora_notificacion" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>
                                                                <button
                                                                    class="btn btn-primary btn-next waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                                                                        <line x1="5" y1="12"
                                                                            x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="social-links-modern" class="content" role="tabpanel"
                                                            aria-labelledby="social-links-modern-trigger">

                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label"
                                                                        for="first-name">Nombres</label>
                                                                    <input type="text" name="nombres" id="nombres"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label"
                                                                        for="first-name">Apellidos</label>
                                                                    <input type="text" name="apellidos" id="apellidos"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="first-name">Relación
                                                                        del
                                                                        Infractor</label>
                                                                    <input type="text" name="relacion_del_infractor"
                                                                        id="relacion_del_infractor" class="form-control">
                                                                </div>
                                                                <div class="mb-1 col-md-6">
                                                                    <label class="form-label" for="first-name">N°
                                                                        deDocumento</label>
                                                                    <input type="text" name="numero_documento"
                                                                        id="numero_documento" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <button
                                                                    class="btn btn-primary btn-prev waves-effect waves-float waves-light"
                                                                    type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-arrow-left align-middle me-sm-25 me-0">
                                                                        <line x1="19" y1="12"
                                                                            x2="5" y2="12"></line>
                                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                                    </svg>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Anterior</span>
                                                                </button>

                                                                <button
                                                                    class="btn btn-success btn-prev waves-effect waves-float waves-light"
                                                                    type="submit">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Registrar</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </section>

                                    </div>
                                </div>

                                <!-- SEGUNDA COLUMNA - VISTA DE FOTOGRAFIA  -->

                                <div class="col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="text-center">
                                                <p class="card-title">PREVISUALIZACIÓN DE LA FOTOGRAFÍA</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <img src="{{ asset($notificacions->foto) }}"
                                                        alt="Foto de la notificación" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </section>
                    </div>
                </div>

        </div>
        </section>        





        <!-- Input Mask End -->

  
    <!-- END: Content-->
    <!-- END: Content-->
@endsection

@section('scripts')
    <!-- -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectTipo = document.getElementById("tipo_documento");
            var inputDocumento = document.getElementById("documento");

            if (selectTipo && inputDocumento) {
                function aplicarConfiguraciones() {
                    var valorSeleccionado = selectTipo.value;
                    inputDocumento.value = "";

                    if (valorSeleccionado === "1") {
                        inputDocumento.setAttribute("maxlength", "11");
                        inputDocumento.setAttribute("pattern", "\\d*");
                    } else if (valorSeleccionado === "2") {
                        inputDocumento.setAttribute("maxlength", "8");
                        inputDocumento.setAttribute("pattern", "\\d*");
                    } else {
                        inputDocumento.removeAttribute("maxlength");
                        inputDocumento.removeAttribute("pattern");
                    }
                }

                aplicarConfiguraciones();

                selectTipo.addEventListener('change', aplicarConfiguraciones);

                inputDocumento.addEventListener('input', function() {
                    var valorSeleccionado = selectTipo.value;
                    var inputValue = inputDocumento.value;

                    if (valorSeleccionado === "1" || valorSeleccionado === "2") {
                        inputDocumento.value = inputValue.replace(/[^0-9]/g, '');
                    }
                });
            }
        });
    </script>


    <!-- BLOQUEAR INPUT  -->
    <script>
        // Asegurarse de que el DOM se haya cargado antes de ejecutar el script
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener los elementos de input
            var montoPosibleMulta = document.getElementById("monto_posible_multa");
            var descripcion = document.getElementById("descripcion");

            // Agregar el evento input para validar la entrada en 'Monto Posible a Multa'
            montoPosibleMulta.addEventListener('input', function() {
                montoPosibleMulta.value = montoPosibleMulta.value.replace(/[^\s]/g,
                    ''); // Permitir solo espacios
            });

            // Agregar el evento input para validar la entrada en 'Descripción'
            descripcion.addEventListener('input', function() {
                descripcion.value = descripcion.value.replace(/[^\s]/g, ''); // Permitir solo espacios
            });
        });
    </script>


    <!-- SELECT ANIDADO - SELECCIONAMOS CODIGO Y NOS MUESTRA LA DESCRIPCION Y EL MONTO y medida_complementaria -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Deshabilita el input 'descripcion' al cargar la página
            document.getElementById('descripcion').disabled = true;

            // Obtén los elementos de 'select1', 'monto_posible_multa', 'descripcion' y 'medida_complementaria'
            const select1 = document.getElementById('select1');
            const montoPosibleMulta = document.getElementById('monto_posible_multa');
            const descripcion = document.getElementById('descripcion');
            const medidaComplementaria = document.getElementById('medida_complementaria');

            // Escucha el evento de cambio en el select
            select1.addEventListener('change', function() {
                // Captura el valor seleccionado
                var codigoSeleccionado = select1.value;

                // Si hay un código seleccionado
                if (codigoSeleccionado) {
                    fetch(`{{ route('getDescripcion') }}?codigo=${codigoSeleccionado}`)
                        .then(response => response.json())
                        .then(data => {
                            // Actualiza los valores de 'monto_posible_multa', 'descripcion' y 'medida_complementaria'
                            montoPosibleMulta.value = data.monto;
                            descripcion.value = data.descripcion;
                            medidaComplementaria.value = data.medida_complementaria;

                            //Habilita los inputs
                            montoPosibleMulta.disabled = false;
                            descripcion.disabled = false;
                            medidaComplementaria.disabled = false;
                        })
                        .catch(error => {
                            console.error('Error al obtener la descripción:', error);

                            // Si hay un error, deshabilita los inputs
                            montoPosibleMulta.disabled = true;
                            descripcion.disabled = true;
                            medidaComplementaria.disabled = true;
                        });
                } else {
                    // Limpia los valores de los inputs
                    montoPosibleMulta.value = '';
                    descripcion.value = '';
                    medidaComplementaria.value = '';

                    // Si no hay código seleccionado, deshabilita los inputs
                    montoPosibleMulta.disabled = true;
                    descripcion.disabled = true;
                    medidaComplementaria.disabled = true;
                }
            });
        });
    </script>



    <!--FECHA ACTUAL - LIMA/PERU -->
    <script>
        // Obtener la fecha actual
        var fechaActual = new Date();

        // Formatear la fecha en formato ISO (YYYY-MM-DD)
        var fechaISO = fechaActual.toISOString().split('T')[0];

        // Establecer la fecha como valor predeterminado del campo de entrada
        document.getElementById('fecha_deteccion').value = fechaISO;
        document.getElementById('fecha_notificacion').value = fechaISO;
    </script>

    <!-- HORA ACTUAL - LIMA/PERU -->
    <script>
        // Obtener la hora actual
        var horaActual = new Date();

        // Formatear la hora en formato HH:mm (24 horas)
        var horaFormateada = horaActual.toTimeString().split(' ')[0].slice(0, 5);

        // Establecer la hora como valor predeterminado del campo de entrada
        document.getElementById('hora_deteccion').value = horaFormateada;
        document.getElementById('hora_notificacion').value = horaFormateada;
    </script>


    <!-- SWEET ALERTS - FORMULARIO -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtén el formulario por su id
            const form = document.getElementById('alertFormulario');

            // Agrega un evento al envío del formulario
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Detiene el envío del formulario por defecto

                // Obtén los valores de los campos que deseas validar
                const tipo_documento = document.getElementById('tipo_documento').value;
                const documento = document.getElementById('documento').value;
                const licencia_funcionamiento = document.getElementById('licencia_funcionamiento').value;
                const razon_social = document.getElementById('razon_social').value;
                const domicilio = document.getElementById('domicilio').value;
                const giro = document.getElementById('giro').value;

                const codigo = document.getElementById('select1').value;
                const medida_complementaria = document.getElementById('medida_complementaria').value;
                const lugar = document.getElementById('lugar').value;
                const placa_de_rodaje = document.getElementById('placa_de_rodaje').value;
                const fecha_deteccion = document.getElementById('fecha_deteccion').value;
                const hora_deteccion = document.getElementById('hora_deteccion').value;

                const fecha_notificacion = document.getElementById('fecha_notificacion').value;
                const hora_notificacion = document.getElementById('hora_notificacion').value;

                const nombres = document.getElementById('nombres').value;
                const apellidos = document.getElementById('apellidos').value;
                const relacion_del_infractor = document.getElementById('relacion_del_infractor').value;
                const numero_documento = document.getElementById('numero_documento').value;



                // Validación de los campos
                if (tipo_documento.trim() === '' || documento.trim() === '' || licencia_funcionamiento
                    .trim() === '' ||
                    razon_social.trim() === '' || domicilio.trim() === '' || giro.trim() === '' || codigo
                    .trim() === '' ||
                    medida_complementaria.trim() === '' ||
                    lugar.trim() === '' || placa_de_rodaje.trim() === '' || fecha_deteccion.trim() === '' ||
                    hora_deteccion.trim() === '' || fecha_notificacion.trim() === '' || hora_notificacion
                    .trim() === '' ||
                    nombres.trim() === '' || apellidos.trim() === '' || relacion_del_infractor.trim() ===
                    '' ||
                    numero_documento.trim() === '') {

                    // Muestra la alerta de error si algún campo está vacío
                    Swal.fire({
                        title: 'Error',
                        text: 'Por favor, completa todos los campos antes de continuar.',
                        icon: 'error',
                        confirmButtonText: 'Aceptar',
                        confirmButtonColor: '#dc3545', // Color de botón de confirmación
                        customClass: {
                            confirmButton: 'btn btn-danger', // Clase CSS para el botón de confirmación
                        },
                    });
                    return; // Detiene la ejecución si algún campo está vacío
                }

                // Muestra la alerta de confirmación
                Swal.fire({
                    title: '¿Estás seguro de que deseas registrar la sanción?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#28a745', // Color de botón de confirmación
                    cancelButtonColor: '#6c757d', // Color de botón de cancelar
                    customClass: {
                        confirmButton: 'btn btn-success', // Clase CSS para el botón de confirmación
                        cancelButton: 'btn btn-secondary', // Clase CSS para el botón de cancelar
                    },
                }).then((result) => {
                    if (result.value) {
                        // Si el usuario hace clic en "Sí", muestra la alerta de registro exitoso
                        Swal.fire({
                            title: '<span style="font-weight: bold; color: black;">¡Registro Exitoso!</span>',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: '#28a745', // Color de botón de confirmación
                            customClass: {
                                confirmButton: 'btn btn-success', // Clase CSS para el botón de confirmación
                            },
                        }).then(() => {
                            // Después de hacer clic en "Ok", envía el formulario
                            form.submit();
                        });
                    } else {
                        // Si el usuario hace clic en "Cancelar", no hagas nada
                        // Puedes agregar más lógica aquí si es necesario
                    }
                });
            });
        });
    </script>
@endsection
