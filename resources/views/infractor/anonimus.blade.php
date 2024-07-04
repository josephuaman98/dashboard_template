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
                        <h2 class="content-header-title float-start mb-0">ACTA DE CONSTATACIÓN</h2>
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
                                        <form id="alertFormulario" method="POST" action="{{ route('formulario.anonimusStorage') }}">
                                            @csrf
                                            <input type="hidden" name="notificacions_id" value="{{ $imagen->notificacion_id }}">
                                            <input type="hidden" name="imagen_id" value="{{ $imagen->id }}">


                                            <div class="bs-stepper wizard-modern modern-wizard-example">
                                                <div class="bs-stepper-header">

                                                <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('formulario.index') }}" style="float: right;">Regresar</a>

                                                </div>
                                                <div class="bs-stepper-content">
                                                    <div id="account-details-modern" class="content" role="tabpanel" aria-labelledby="account-details-modern-trigger">

                                                        <div class="d-flex justify-content-between">

                                                        </div>
                                                    </div>
                                                    <div id="personal-info-modern" class="content active dstepper-block" role="tabpanel" aria-labelledby="personal-info-modern-trigger">

                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="fecha-medida">Fecha</label>
                                                                <input type="date" name="fecha" id="fecha" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="hora-medida">Hora de
                                                                    Detección</label>
                                                                <input type="time" name="hora" id="hora" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Presencia del Sr(a).</label>
                                                                <input type="text" name="señor" id="señor" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Se constituyo a.</label>
                                                                <input type="text" name="constituyo" id="constituyo" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Constatándose lo siguiente:</label>
                                                                <textarea name="constatandose" id="constatandose" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Observaciones:</label>
                                                                <textarea name="observacion" id="observacion" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="fecha-medida">Fecha de conclusion</label>
                                                                <input type="date" name="fecha_conclusion" id="fecha_conclusion" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="hora-medida">Hora de conclusion</label>
                                                                <input type="time" name="hora_conclusion" id="hora_conclusion" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Nombre del Administrado</label>
                                                                <input type="text" name="nombre_administrado" id="nombre_administrado" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">DNI</label>
                                                                <input type="text" name="dni" id="dni" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 1 / NOMBRES</label>
                                                                <input type="text" name="nombre_testigo1" id="nombre_testigo1" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 1 / APELLIDOS</label>
                                                                <input type="text" name="apellido_testigo1" id="apellido_testigo1" class="form-control">
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 2 / NOMBRES</label>
                                                                <input type="text" name="nombre_testigo2" id="nombre_testigo2" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 2 / APELLIDOS</label>
                                                                <input type="text" name="apellido_testigo2" id="apellido_testigo2" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <button class="btn btn-success" type="submit">
                                                        <span class="align-middle d-sm-inline-block d-none">Registrar</span>
                                                    </button>

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
                                            <div class="col-md-12 text-center" id="contenedor-imagen">
                                                <img id="imagen" src="{{ asset($imagen->foto) }}" alt="Foto de la notificación" class="img-fluid">
                                            </div>

                                            <div class="text-center mt-2">
                                                <!-- Botón de acercar con icono de lupa -->
                                                <button id="zoomInBtn" class="btn btn-primary">
                                                    <i data-feather='zoom-in'></i>
                                                </button>
                                                <!-- Botón de alejar con icono de lupa menos -->
                                                <button id="zoomOutBtn" class="btn btn-primary">
                                                    <i data-feather='zoom-out'></i>
                                                </button>

                                                <!-- Botón de restablecer con icono de restablecer -->
                                                <button id="resetBtn" class="btn btn-warning">
                                                    <i data-feather='refresh-ccw'></i> Restablecer
                                                </button>

                                                <!-- Botón de rotación en sentido anti-horario con icono de rotación en sentido contrario -->
                                                <button id="rotateCounterClockwiseBtn" class="btn btn-primary">
                                                    <i data-feather='rotate-ccw'></i>
                                                </button>

                                                <!-- Botón de rotación en sentido horario con icono de rotación -->
                                                <button id="rotateClockwiseBtn" class="btn btn-primary">
                                                    <i data-feather='rotate-cw'></i>
                                                </button>
                                            </div>
                                            <div class="text-center mt-2">
                                                <!-- Descarga de la imagen -->
                                                <button id="downloadBtn" class="btn btn-success">
                                                    <i data-feather='download'></i> Descargar
                                                </button>
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





@endsection

@section('scripts')









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
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const fecha = document.getElementById('fecha').value;
            const hora = document.getElementById('hora').value;
            const señor = document.getElementById('señor').value;
            const constituyo = document.getElementById('constituyo').value;
            const constatandose = document.getElementById('constatandose').value;
            //const observacion = document.getElementById('observacion').value;
            const fecha_conclusion = document.getElementById('fecha_conclusion').value;
            const hora_conclusion = document.getElementById('hora_conclusion').value;
            const nombre_administrado = document.getElementById('nombre_administrado').value;
            const dni = document.getElementById('dni').value;
            const nombre_testigo1 = document.getElementById('nombre_testigo1').value;
            const apellido_testigo1 = document.getElementById('apellido_testigo1').value;
            //const nombre_testigo2 = document.getElementById('nombre_testigo2').value;
            //const apellido_testigo2 = document.getElementById('apellido_testigo2').value;

            if (fecha.trim() === '') {
                mostrarError('Por favor, Ingrese la FECHA de la Acta de Constatación.');
                return;
            }
            if (hora.trim() === '') {
                mostrarError('Por favor, ingrese la HORA en la Acta de Constatación.');
                return;
            }
            if (señor.trim() === '') {
                mostrarError('Por favor, ingrese el nombre del Sr(a) en la Acta de Constatación.');
                return;
            }
            if (constituyo.trim() === '') {
                mostrarError('Por favor, ingrese los Datos de la Constatación en la Acta de Constatación.');
                return;
            }
            if (constatandose.trim() === '') {
                mostrarError('Por favor, ingre los Datos en el Acta de Constatación.');
                return;
            }
            // if (observacion.trim() === '') {
            //     mostrarError('Por favor, ingrese las Observaciones de la Acta de Constatación.');
            //     return;
            // }
            if (fecha_conclusion.trim() === '') {
                mostrarError('Por favor, ingrese la FECHA DE CONCLUSIÓN de la Acta de Constatación.');
                return;
            }
            if (hora_conclusion.trim() === '') {
                mostrarError('Por favor, ingrese la HORA DE CONCLUSIÓN de la Acta de Constatación. ');
                return;
            }
            if (nombre_administrado.trim() === '') {
                mostrarError('Por favor, ingrese el NOMBRE del Administrado de la Acta de Constatación. .');
                return;
            }
            if (dni.trim() === '') {
                mostrarError('Por favor, ingrese el DNI del Administrado de la Acta de Constatación. ');
                return;
            }
            if (nombre_testigo1.trim() === '') {
                mostrarError('Por favor, ingrese el NOMBRE del Testigo N°1 de la Acta de Constatación.');
                return;
            }
            if (apellido_testigo1.trim() === '') {
                mostrarError('Por favor, ingrese el APELLIDO del Testigo N°1  la Acta de Constatación.');
                return;
            }
            // if (nombre_testigo2.trim() === '') {
            //     mostrarError('Por favor, ingrese el Nombre del Testigo 2 en la Acta de Constatación.');
            //     return;
            // }
            // if (apellido_testigo2.trim() === '') {
            //     mostrarError('Por favor, ingrese el Apellido del Testigo 2 en la Acta de Constatación.');
            //     return;
            // }



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


<!-- ZOOM Y ROTACIÓN DE IMAGEN -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener referencia a la imagen y al contenedor
        var contenedorImagen = document.getElementById("contenedor-imagen");
        var imagen = document.getElementById("imagen");

        // Definir el factor de zoom
        var factorZoom = 1.2; // Puedes ajustar este valor según tus necesidades

        // Guardar el tamaño original de la imagen
        var tamañoOriginal = {
            width: imagen.clientWidth,
            height: imagen.clientHeight
        };

        // Definir el ángulo de rotación
        var anguloRotacion = 90; // Ángulo de rotación en grados

        // Manejar el evento de clic en el botón de acercar
        document.getElementById("zoomInBtn").addEventListener("click", function() {
            aplicarZoom(factorZoom);
        });

        // Manejar el evento de clic en el botón de alejar
        document.getElementById("zoomOutBtn").addEventListener("click", function() {
            aplicarZoom(1 / factorZoom);
        });

        // Manejar el evento de clic en el botón de restablecer
        document.getElementById("resetBtn").addEventListener("click", function() {
            // Restablecer el tamaño original de la imagen
            imagen.style.width = tamañoOriginal.width + "px";
            imagen.style.height = tamañoOriginal.height + "px";

            // Restablecer la rotación de la imagen
            imagen.style.transform = "rotate(0deg)";
        });

        // Manejar el evento de clic en el botón de rotación en sentido horario
        document.getElementById("rotateClockwiseBtn").addEventListener("click", function() {
            rotarImagen(anguloRotacion);
        });

        // Manejar el evento de clic en el botón de rotación en sentido antihorario
        document.getElementById("rotateCounterClockwiseBtn").addEventListener("click", function() {
            rotarImagen(-anguloRotacion);
        });

        // Función para aplicar el zoom a la imagen
        function aplicarZoom(factor) {
            // Obtener el tamaño actual de la imagen
            var actualWidth = imagen.clientWidth;
            var actualHeight = imagen.clientHeight;

            // Calcular el nuevo tamaño de la imagen
            var nuevoAncho = actualWidth * factor;
            var nuevoAlto = actualHeight * factor;

            // Aplicar el nuevo tamaño de la imagen
            imagen.style.width = nuevoAncho + "px";
            imagen.style.height = nuevoAlto + "px";
        }

        // Función para rotar la imagen
        function rotarImagen(angulo) {
            // Obtener la rotación actual de la imagen
            var rotacionActual = obtenerRotacionActual(imagen);

            // Calcular la nueva rotación
            var nuevaRotacion = rotacionActual + angulo;

            // Aplicar la rotación a la imagen
            imagen.style.transform = "rotate(" + nuevaRotacion + "deg)";
        }

        // Función para obtener la rotación actual de la imagen
        function obtenerRotacionActual(elemento) {
            var estilo = window.getComputedStyle(elemento);
            var transform = estilo.getPropertyValue("transform");

            // Extraer el ángulo de rotación actual del transform
            var matrizTransform = transform.match(/^matrix\((.+)\)$/);

            if (matrizTransform) {
                // Obtener los valores de la matriz de transformación
                var valores = matrizTransform[1].split(",");

                // Calcular la rotación actual en radianes y luego convertirla a grados
                var a = valores[0];
                var b = valores[1];
                var rotacion = Math.round(Math.atan2(b, a) * (180 / Math.PI));

                // Ajustar el ángulo para asegurarse de que esté dentro del rango [0, 360)
                if (rotacion < 0) {
                    rotacion += 360;
                }

                return rotacion;
            } else {
                return 0; // No se pudo obtener la rotación actual
            }
        }
    });
</script>


<!-- Script para descargar la imagen -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Manejar el evento de clic en el botón de descarga
        document.getElementById("downloadBtn").addEventListener("click", function() {
            // Obtener la URL de la imagen
            var imagenSrc = document.getElementById("imagen").src;

            // Crear un elemento de enlace temporal
            var enlace = document.createElement("a");
            enlace.href = imagenSrc;
            enlace.download = "ACTA_DE_EJECUCION_DE_MEDIDA_PROVISIONAL.jpg"; // Nombre de archivo para la descarga

            // Simular un clic en el enlace para iniciar la descarga
            document.body.appendChild(enlace);
            enlace.click();

            // Limpiar el enlace temporal
            document.body.removeChild(enlace);
        });
    });
</script>       



@endsection