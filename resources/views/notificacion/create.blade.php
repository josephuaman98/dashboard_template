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
                        <h2 class="content-header-title float-start mb-0">NOTIFICACION</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">NOTIFICACION</a></li>
                                <li class="breadcrumb-item active">REGISTRO</li>
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

                                        
                                        



                                            <form id="alertFormulario" class="form" action="{{ route('notificacion.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                <div class="mb-1 col-md-12">
                                                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('notificacion.index') }}" style="float: right;">Regresar</a>
                                                </div>
                                                
                                                    <h1></h1>
                                                    
                                                    <div class="mb-1 col-md-12">
                                                    
                                                        <label class="form-label" for="modern-username">Tipo
                                                            Intervencion</label>
                                                        <select id="tipoIntervencion" name="tipoIntervencion" class="form-select" onchange="mostrarContenido()">
                                                            <option value="0" selected disabled>Seleccione una
                                                                opcion</option>
                                                            @foreach ($tipoIntervenciones as $tipoIntervencion)
                                                            <option value="{{ $tipoIntervencion->id }}">
                                                                {{ $tipoIntervencion->nombre }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>


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


                                                    <div id="oficio">
                                                        <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
                                                            <h4 id="notificacion_preventiva" class="card-title">NOTIFICACIÓN DE CARGO</h4>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">CODIGO / N°</label>
                                                                <input type="text" name="codigo2" id="codigo2" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">AÑO</label>
                                                                <input type="text" name="anio" id="anio" class="form-control" readonly>
                                                            </div>
                                                        </div>


                                                        <div class="mb-1">
                                                            <label for="imagenPrevi2" class="form-label">IMAGEN</label>
                                                            <div class="border rounded p-2">
                                                                <div class="d-flex flex-column flex-md-row">
                                                                    <img id="imagenPrevisualizacion2" class="rounded me-2 mb-1 mb-md-0" style="max-width: 250px; max-height: 250px">
                                                                    <div class="featured-info">
                                                                        <small class="text-muted">La imagen requiere
                                                                            una resolución de 800x400.</small>
                                                                        <p class="my-50">
                                                                            <a href="#" id="blog-image-text">No
                                                                                se ha seleccionado ninguna imagen</a>
                                                                        </p>
                                                                        <div class="d-inline-block">
                                                                            <input class="form-control" type="file" id="imagenPrevi2" name="foto2" accept="image/*" onchange="previsualizarImagen(2)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div id="operativo">
                                                        <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
                                                            <h4 id="acta_de_constatacion" class="card-title">ACTA DE CONSTATACIÓN</h4>
                                                        </div>

                                                        <div class="col-md-12 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="first-name-column">CODIGO N°</label>
                                                                <input type="text" id="codigo1" class="form-control" placeholder="" name="codigo1" value="{{ old('codigo1') }}">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-1">
                                                            <label for="imagenPrevi1" class="form-label">IMAGEN</label>
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

                                                    


                                                </div>

                                                <div id="anonimo">
                                                    <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
                                                        <h4 id="medida_provicional" class="card-title">ACTA DE EJECUCIÓN DE MEDIDA PREVENTIVA</h4>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="first-name-column">CODIGO / N° </label>
                                                            <input type="text" id="codigo3" class="form-control" placeholder="" name="codigo3">
                                                        </div>
                                                    </div>

                                                    <div class="mb-1">
                                                        <label for="imagenPrevi3" class="form-label">IMAGEN</label>
                                                        <div class="border rounded p-2">
                                                            <div class="d-flex flex-column flex-md-row">
                                                                <img id="imagenPrevisualizacion3" class="rounded me-2 mb-1 mb-md-0" style="max-width: 250px; max-height: 250px">
                                                                <div class="featured-info">
                                                                    <small class="text-muted">La imagen requiere una
                                                                        resolución de 800x400.</small>
                                                                    <p class="my-50">
                                                                        <a href="#" id="blog-image-text">No se
                                                                            ha seleccionado ninguna imagen</a>
                                                                    </p>
                                                                    <div class="d-inline-block">
                                                                        <input class="form-control" type="file" id="imagenPrevi3" name="foto3" accept="image/*" onchange="previsualizarImagen(3)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>







                                                <div class="col-12">

                                                    <button type="submit" id="submitFormButton" class="btn btn-primary me-1 waves-effect waves-float waves-light">Registrar</button>
                                                    <button type="reset" class="btn btn-outline-secondary waves-effect">Resetear
                                                        formulario</button>
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
<!-- CAMBIAR TITULO ACORDE AL SELECT -->
<!-- <script>
    // Detecta cambios en el elemento select
    $('#tipoIntervencion').on('change', function() {
        // Obtiene el valor seleccionado
        var tipoIntervencion = $(this).val();

        // Actualiza el contenido del elemento card-title en función del valor seleccionado
        if (tipoIntervencion == '1') {
            $('#acta_de_constatacion').text('ACTA DE CONSTATACIÓN');
        } else if (tipoIntervencion == '2') {
            $('#acta_de_constatacion').text('ACTA DE CONSTATACIÓN');
            $('#notificacion_preventiva').text('NOTIFICACIÓN PREVENTIVA');
        } else if (tipoIntervencion == '3') {
            $('#acta_de_constatacion').text('ACTA DE CONSTATACIÓN');
            $('#notificacion_preventiva').text('NOTIFICACIÓN PREVENTIVA');
            $('#medida_provicional').text('ACTA DE EJECUCIÓN DE MEDIDA PROVICIONAL');
        }
    });
</script> -->


<!-- Mostrar y Ocultar Campos de text -->

<!-- 
 <script>
    document.getElementById("miFormulario").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        mostrarContenido();
        validarFormulario();
    });

    function mostrarContenido() {
        var tipoIntervencion = document.getElementById("tipoIntervencion");
        var operativo = document.getElementById("operativo");
        var oficio = document.getElementById("oficio");
        var anonimo = document.getElementById("anonimo");

        // Mostrar u ocultar contenido basándonos en la opción seleccionada
        if (tipoIntervencion.value === "1") {
            operativo.style.display = "block";
            oficio.style.display = "none";
            anonimo.style.display = "none";
        } else if (tipoIntervencion.value === "2") {
            operativo.style.display = "block";
            oficio.style.display = "block";
            anonimo.style.display = "none";
        } else if (tipoIntervencion.value === "3") {
            operativo.style.display = "block";
            oficio.style.display = "block";
            anonimo.style.display = "block";
        } else {
            operativo.style.display = "none";
            oficio.style.display = "none";
            anonimo.style.display = "none";
        }
    }

</script>  -->



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


<!-- %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %  %-->

<!-- SWEET ALERTS - FORMULARIO
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const tipoIntervencion = document.getElementById('tipoIntervencion').value;

            // Validar si el campo tipoIntervencion está vacío
            if (tipoIntervencion.trim() === '' || tipoIntervencion === '0') {
                mostrarError('Por favor, Seleccione un Tipo de Intervención.');
                return;
            }

            // Validación para el grupo 1
            const codigo1 = document.getElementById('codigo1').value;
            const imagenPrevi1 = document.getElementById('imagenPrevi1').value;
            const grupo1Valido = (codigo1.trim() === '' && imagenPrevi1.trim() === '') || (codigo1.trim() !== '' && imagenPrevi1.trim() !== '');

            // Validación para el grupo 2
            const codigo2 = document.getElementById('codigo2').value;
            const imagenPrevi2 = document.getElementById('imagenPrevi2').value;
            const grupo2Valido = (codigo2.trim() === '' && imagenPrevi2.trim() === '') || (codigo2.trim() !== '' && imagenPrevi2.trim() !== '');

            // Validación para el grupo 3
            const codigo3 = document.getElementById('codigo3').value;
            const imagenPrevi3 = document.getElementById('imagenPrevi3').value;
            const grupo3Valido = (codigo3.trim() === '' && imagenPrevi3.trim() === '') || (codigo3.trim() !== '' && imagenPrevi3.trim() !== '');

            // Validación general: todos los grupos deben ser válidos
            const formularioValido = grupo1Valido && grupo2Valido && grupo3Valido;

            if (!formularioValido) {
                mostrarError('Por favor, completa ambos campos del grupo seleccionado.');
                return;
            }

            // Mensaje de confirmación y envío del formulario...
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
</script> -->

<!-- SWEET ALERTS - FORMULARIO -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const tipoIntervencion = document.getElementById('tipoIntervencion').value;

            // Validar si el campo tipoIntervencion está vacío
            if (tipoIntervencion.trim() === '' || tipoIntervencion === '0') {
                mostrarError('Por favor,Seleccione el TIPO DE INTERVENCIÓN .', 'ERROR');
                return;
            }

            // Validación para el grupo 1
            const codigo1 = document.getElementById('codigo1').value;
            const imagenPrevi1 = document.getElementById('imagenPrevi1').value;
            const grupo1Valido = (codigo1.trim() === '' && imagenPrevi1.trim() === '') || (codigo1.trim() !== '' && imagenPrevi1.trim() !== '');

            if (!grupo1Valido) {
                mostrarError('Por favor, Complete los Campos de ACTA DE CONSTATACIÓN .', 'OBLIGATORIO !!');
                return;
            }

            // Validación para el grupo 2
            const codigo2 = document.getElementById('codigo2').value;
            const imagenPrevi2 = document.getElementById('imagenPrevi2').value;
            const grupo2Valido = codigo2.trim() !== '' && imagenPrevi2.trim() !== ''; // Hacer la validación requerida para el grupo 2

            if (!grupo2Valido) {
                mostrarError('Por favor, Complete los Campos de NOTIFICACIÓN DE CARGO.', 'ERROR');
                return;
            }

            // Validación para el grupo 3
            const codigo3 = document.getElementById('codigo3').value;
            const imagenPrevi3 = document.getElementById('imagenPrevi3').value;
            const grupo3Valido = (codigo3.trim() === '' && imagenPrevi3.trim() === '') || (codigo3.trim() !== '' && imagenPrevi3.trim() !== '');

            if (!grupo3Valido) {
                mostrarError('Por favor, Complete los Campos de ACTA DE EJECUCIÓN DE MEDIDA PREVENTIVA .', 'ERROR');
                return;
            }

            // Mensaje de confirmación y envío del formulario...
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
                }
            });
        });

        function mostrarError(mensaje, grupo) {
            let titulo;
            switch (grupo) {
                case 'grupo1':
                    titulo = 'Error en grupo 1';
                    break;
                case 'grupo2':
                    titulo = 'Error en grupo 2';
                    break;
                case 'grupo3':
                    titulo = 'Error en grupo 3';
                    break;
                default:
                    titulo = 'Error';
            }

            Swal.fire({
                title: titulo,
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

<!-- AÑO ACTUAL -->
<script>
    // Obtener el año actual
    var year = new Date().getFullYear();

    // Asignar el año actual al campo de entrada
    document.getElementById('anio').value = year;
</script>



@endsection