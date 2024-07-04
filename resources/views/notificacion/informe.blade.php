@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.10/dist/sweetalert2.min.css" integrity="sha384-xCuYKAIfv6bvEXLc1QzH4jlwBxDQvMP0A/36lwS9zP4c/TppYkYnV8fdG/fND" crossorigin="anonymous">
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
                        <h2 class="content-header-title float-start mb-0">INFORME</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">INFORNE</a></li>
                                <li class="breadcrumb-item active">INFORME</li>
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

                           




                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="alertFormulario" class="form" action="{{ route('notificacion.storeInforme') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                        
                                                <input type="hidden" name="notificacion_id" id="notificacion_id" value="{{$notificacion->id}}">
                                                <div class="row">
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger text-center" role="alert">
                                                        <h4 class="alert-heading">Danger</h4>
                                                        <div class="alert-body">
                                                            @foreach ($errors->all() as $error)
                                                            <p class="mb-0">{{ $error }}</p>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    @endif


                                                    <div id="operativo">
                                                        <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
                                                            <h4 id="acta_de_constatacion" class="card-title"></h4>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="first-name-column">ASUNTO / REFERENCIA</label>
                                                                <input type="text" id="asunto" class="form-control" placeholder="" name="asunto" value="{{ old('asunto') }}">
                                                            </div>
                                                        </div>

                                                        <div class="mb-1">
                                                            <label for="imagenPrevi1" class="form-label">IMAGEN DEL INFORME</label>
                                                            <div class="border rounded p-2">
                                                                <div class="d-flex flex-column flex-md-row">
                                                                    <img id="imagenPrevisualizacion1" class="rounded me-2 mb-1 mb-md-0" style="max-width: 250px; max-height: 250px">
                                                                    <div class="featured-info">
                                                                        <small class="text-muted">La imagen requiere una
                                                                            resolución de 800x400.</small>
                                                                        <p class="my-50">
                                                                            <a href="#" id="blog-image-text">No se
                                                                                ha seleccionado ninguna imagen</a>
                                                                        </p>
                                                                        <div class="d-inline-block">
                                                                            <input class="form-control" type="file" id="imagenPrevi1" name="foto1" accept="image/*" onchange="previsualizarImagen(1)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="col-12">

                                                        <button type="submit" id="submitFormButton" class="btn btn-success me-1 waves-effect waves-float waves-light">Registrar</button>
                                                        <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('notificacion.index') }}" >Regresar</a>
                                                       
                                                    
                                                
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>





<!-- PRE-VISUALIZACION DE LA IMAGEN Y DESACTIVACION CUANDO SE HACE CLIC PARA VER LA IMAGEN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    function previsualizarImagen(numero) {
        const input = document.getElementById('imagenPrevi' + numero);
        const imagenPrevisualizacion = document.getElementById('imagenPrevisualizacion' + numero);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagenPrevisualizacion.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- SWEET ALERTS - FORMULARIO -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const asunto = document.getElementById('asunto').value;
            const foto1 = document.getElementById('imagenPrevi1').value;
            // Puedes agregar más campos aquí según sea necesario

            // Validación de campos
            if (asunto.trim() === '') {
                mostrarError('Por favor, ingresa el asunto.');
                return;
            }
            if (foto1.trim() === '') {
                mostrarError('Por favor, selecciona una imagen.');
                return;
            }
            // Puedes agregar más validaciones para otros campos si es necesario

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
