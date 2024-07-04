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
                        <h2 class="content-header-title float-start mb-0">ACTA DE EJECUCION DE MEDIDA PROVISIONAL</h2>
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
                                        <form id="alertFormulario" method="POST" action="{{ route('formulario.operativoStorage') }}">
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
                                                                <label class="form-label" for="hora-medida">Hora</label>
                                                                <input type="time" name="hora" id="hora" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">El que
                                                                    Suscribe.</label>
                                                                <input type="text" name="suscribe" id="suscribe" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Notificacion
                                                                    de Cargo N°</label>
                                                                <input type="text" name="preventiva" id="preventiva" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Acta de
                                                                    Constatación N°</label>
                                                                <input type="text" name="constatacion" id="constatacion" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Establecimiento / Predio Ubicado en
                                                                    :</label>
                                                                <textarea name="establecimiento" id="establecimiento" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Conducido Por
                                                                    / Propiedad de:</label>
                                                                <textarea name="conducido" id="conducido" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="modern-username">Giro</label>
                                                                <select id="giro" name="giro" class="form-select">
                                                                    @foreach ($giros as $giro)
                                                                    <option value="{{ $giro->nombre }}" selected>
                                                                        {{ $giro->nombre }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Siguiente
                                                                    Infracción</label>
                                                                <textarea name="infraccion" id="infraccion" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Formulado por el Administrado para Observaciones</label>
                                                                <textarea name="observaciones" id="observaciones" class="form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <!-- <div class="row">
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">Clausura Temporal</label>
                                                            </div>
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">Retiro de animales</label>
                                                            </div>
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">Clausura definitiva</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                           
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4">Demolición</label>
                                                            </div>
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                                <label class="form-check-label" for="customCheck5">Paralización de Obra</label>
                                                            </div>
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck6">
                                                                <label class="form-check-label" for="customCheck6">Retención</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">Ejecución y Restitución</label>
                                                            </div>
                                                            <div class="form-check col-md-4">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">Decomiso</label>
                                                            </div>
                                                        </div>
                                                        <br> -->


                                                        <div class="demo-inline-spacing">
                                                            @foreach ($sanciones as $sancion)
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="color_{{ $sancion->id }}" name="sanciones[]" value="{{ $sancion->id }}">
                                                                <label class="form-check-label" for="color_{{ $sancion->id }}">{{ $sancion->nombre }}</label>
                                                            </div>
                                                            @endforeach
                                                           
                                                     
                                                        </div>
                                                        <br>
                                                        <label class="form-label" for="first-name">Otros</label>
                                                        <input type="text" name="otros" id="otros" class="form-control">
                                                        <br>



                                                        <br>

                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 1 /
                                                                    NOMBRES</label>
                                                                <input type="text" name="nombre_testigo1" id="nombre_testigo1" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 1 /
                                                                    APELLIDOS</label>
                                                                <input type="text" name="apellido_testigo1" id="apellido_testigo1" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 2 /
                                                                    NOMBRES</label>
                                                                <input type="text" name="nombre_testigo2" id="nombre_testigo2" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">TESTIGO 2 /
                                                                    APELLIDOS</label>
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

<!-- SWEET ALERTS - FORMULARIO -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const fecha = document.getElementById('fecha').value;
            const hora = document.getElementById('hora').value;
            const suscribe = document.getElementById('suscribe').value;
            const preventiva = document.getElementById('preventiva').value;
            const constatacion = document.getElementById('constatacion').value;
            const establecimiento = document.getElementById('establecimiento').value;
            const conducido = document.getElementById('conducido').value;
            const giro = document.getElementById('giro').value;
            const infraccion = document.getElementById('infraccion').value;
            //const observaciones = document.getElementById('observaciones').value;

            const nombre_testigo1 = document.getElementById('nombre_testigo1').value;
            const apellido_testigo1 = document.getElementById('apellido_testigo1').value;
            //const nombre_testigo2 = document.getElementById('nombre_testigo2').value;
            //const apellido_testigo2 = document.getElementById('apellido_testigo2').value;

            // console.log(fecha);
            // console.log(hora);
            // console.log(suscribe);
            // console.log(preventiva);
            // console.log(constatacion);
            // console.log(establecimiento);
            // console.log(conducido);
            // console.log(giro);
            // console.log(infraccion);
            // console.log(observaciones);
            // console.log(nombre_testigo1);
            // console.log(apellido_testigo1);
            // console.log(nombre_testigo2);
            // console.log(apellido_testigo2);
            // return;

            if (fecha.trim() === '') {
                mostrarError('Por favor, Seleccione la Fecha de la Infracción.');
                return;
            }
            if (hora.trim() === '') {
                mostrarError('Por favor, Ingrese la Hora de la Detención.');
                return;
            }
            if (suscribe.trim() === '') {
                mostrarError('Por favor, Ingrese los datos del que Suscribe.');
                return;
            }
            if (preventiva.trim() === '') {
                mostrarError('Por favor, Ingrese el Numero de Notificación de Cargo.');
                return;
            }
            if (constatacion.trim() === '') {
                mostrarError('Por favor, Ingrese el Numero de Acta de Constatación.');
                return;
            }
            if (establecimiento.trim() === '') {
                mostrarError('Por favor, Ingrese la ubicación del Establecimiento / Predio.');
                return;
            }
            if (conducido.trim() === '') {
                mostrarError('Por favor, Ingrese los datos en el campo Conducido Por / Propiedad de.');
                return;
            }
            if (giro.trim() === '') {
                mostrarError('Por favor, Seleccione un giro de la lista desplegable.');
                return;
            }
            if (infraccion.trim() === '') {
                mostrarError('Por favor, Ingrese la Siguiente Infracción.');
                return;
            }
            // if (observaciones.trim() === '') {
            //     mostrarError('Por favor, Ingrese las Observaciones formulada por el Administrador.');
            //     return;
            // }
            if (nombre_testigo1.trim() === '') {
                mostrarError('Por favor, Ingrese el Nombre del Testigo 1.');
                return;
            }
            if (apellido_testigo1.trim() === '') {
                mostrarError('Por favor, Ingrese el Apellido del Testigo 1.');
                return;
            }
            // if (nombre_testigo2.trim() === '') {
            //     mostrarError('Por favor, Ingrese el Nombre del Testigo 2.');
            //     return;
            // }
            // if (apellido_testigo2.trim() === '') {
            //     mostrarError('Por favor, Ingrese el Apellido del Testigo 2.');
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