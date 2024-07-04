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
                                        <form id="alertFormulario" method="POST" action="{{ route('formulario.store') }}">
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
                                                            <div class="mb-1 col-md-3">
                                                                <label class="form-label" for="modern-username">Tipo de Doc.</label>
                                                                <select id="tipo_documento" name="tipo_documento" class="form-select">
                                                                    <!-- Add your options here -->
                                                                    <option value="1">RUC</option>
                                                                    <option value="2">DNI</option>
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="mb-1 col-md-3">
                                                                <label class="form-label">N° de Doc.</label>
                                                                <input type="text" id="documento" name="documento" class="form-control" placeholder="" aria-label="john.doe">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="modern-email">N°
                                                                    Licencia
                                                                    de Funcionamiento</label>
                                                                <input type="text" id="licencia_funcionamiento" name="licencia_funcionamiento" class="form-control" placeholder="" aria-label="john.doe">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label">Apellido, Nombre,
                                                                    Denominación
                                                                    Y/O Razón Social</label>
                                                                <input type="text" name="razon_social" id="razon_social" class="form-control" aria-label="john.doe">
                                                            </div>
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label">Domicilio</label>
                                                                <input type="text" name="domicilio" id="domicilio" class="form-control" aria-label="john.doe">
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="mb-1 col-md-4">
                                                                <label class="form-label" for="modern-username">Giro</label>
                                                                <select id="giro" name="giro" class="form-select">
                                                                    @foreach ($giros as $giro)
                                                                    <option value="{{ $giro->nombre }}" selected>
                                                                        {{ $giro->nombre }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="mb-1 col-md-4">
                                                                <label class="form-label" for="modern-username">Codigo</label>
                                                                <select id="select1" name="codigo" class="form-select">
                                                                    @foreach ($codigos as $id => $codigo)
                                                                    <option value="{{ $codigo }}" selected>{{ $codigo }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="mb-1 col-md-4">
                                                                <label class="form-label" for="first-name">Monto
                                                                    Posible a Multa S/.</label>
                                                                <input type="text" name="monto_posible_multa" id="monto_posible_multa" class="form-control" readonly />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Descripción</label>
                                                                <input type="text" name="descripcion" id="descripcion" class="form-control" readonly />
                                                            </div>
                                                        </div>












                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Medida
                                                                    Complementaria</label>
                                                                <input type="text" name="medida_complementaria" id="medida_complementaria" class="form-control" readonly />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="first-name">Lugar</label>
                                                                <input type="text" name="lugar" id="lugar" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-4">
                                                                <label class="form-label" for="first-name">Placa de
                                                                    Rodaje
                                                                    N°</label>
                                                                <input type="text" name="placa_de_rodaje" id="placa_de_rodaje" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-4">
                                                                <label class="form-label" for="fecha-medida">Fecha de
                                                                    Detección</label>
                                                                <input type="date" name="fecha_deteccion" id="fecha_deteccion" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-4">
                                                                <label class="form-label" for="hora-medida">Hora de
                                                                    Detección</label>
                                                                <input type="time" name="hora_deteccion" id="hora_deteccion" class="form-control">
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="fecha-medida">Fecha de
                                                                    Notificación</label>
                                                                <input type="date" name="fecha_notificacion" id="fecha_notificacion" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="hora-medida">Hora de
                                                                    Notificación</label>
                                                                <input type="time" name="hora_notificacion" id="hora_notificacion" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div>

                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">Nombres</label>
                                                                <input type="text" name="nombres" id="nombres" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">Apellidos</label>
                                                                <input type="text" name="apellidos" id="apellidos" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">Relación
                                                                    del
                                                                    Infractor</label>
                                                                <input type="text" name="relacion_del_infractor" id="relacion_del_infractor" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-6">
                                                                <label class="form-label" for="first-name">N°
                                                                    de Documento</label>
                                                                <input type="text" name="numero_documento" id="numero_documento" class="form-control">
                                                            </div>
                                                        </div>



                                                        <div class="d-flex justify-content-between">
                                                            <button class="btn btn-success" type="submit">
                                                                <span class="align-middle d-sm-inline-block d-none">Registrar</span>
                                                            </button>
                                                           
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
        const form = document.getElementById('alertFormulario');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const tipo_documento = document.getElementById('tipo_documento').value;
            const documento = document.getElementById('documento').value;
            const licencia_funcionamiento = document.getElementById('licencia_funcionamiento').value;
            const razon_social = document.getElementById('razon_social').value;
            const domicilio = document.getElementById('domicilio').value;
            const giro = document.getElementById('giro').value;
            const select1 = document.getElementById('select1').value;
            const monto_posible_multa = document.getElementById('monto_posible_multa').value;
            const descripcion = document.getElementById('descripcion').value;
            const medida_complementaria = document.getElementById('medida_complementaria').value;
            const lugar = document.getElementById('lugar').value;
            //const placa_de_rodaje = document.getElementById('placa_de_rodaje').value;
            const fecha_deteccion = document.getElementById('fecha_deteccion').value;
            const hora_deteccion = document.getElementById('hora_deteccion').value;
            const fecha_notificacion = document.getElementById('fecha_notificacion').value;
            const hora_notificacion = document.getElementById('hora_notificacion').value;
            // const nombres = document.getElementById('nombres').value;
            // const apellidos = document.getElementById('apellidos').value;
            // const relacion_del_infractor = document.getElementById('relacion_del_infractor').value;
            // const numero_documento = document.getElementById('numero_documento').value;


            if (tipo_documento.trim() === '') {
                mostrarError('Por favor, Seleccione un Tipo de Documento.');
                return;
            }
            if (documento.trim() === '') {
                mostrarError('Por favor, Ingrese el Numero de Documento.');
                return;
            }
            if (licencia_funcionamiento.trim() === '') {
                mostrarError('Por favor, Ingrese el Numero de Licencia de Funcionamiento.');
                return;
            }
            if (razon_social.trim() === '') {
                mostrarError('Por favor, Ingrese la Razón Social.');
                return;
            }
            if (domicilio.trim() === '') {
                mostrarError('Por favor, Ingrese la Dirección del Docmicilio.');
                return;
            }
            if (giro.trim() === '') {
                mostrarError('Por favor, Seleccione un Giro especifico.');
                return;
            }
            if (select1.trim() === '') {
                mostrarError('Por favor, Seleccione un Codigo de Sanción.');
                return;
            }
            if (monto_posible_multa.trim() === '') {
                mostrarError('No se Ingreso Correctamente El Monto / Comuniquese con el Area de Informatica.');
                return;
            }
            if (descripcion.trim() === '') {
                mostrarError('No se Ingreso Correctamente La Descripción / Comuniquese con el Area de Informatica.');
                return;
            }
            if (medida_complementaria.trim() === '') {
                mostrarError('No se Ingreso Correctamente La Medida Complementaria / Comuniquese con el Area de Informatica');
                return;
            }
            if (lugar.trim() === '') {
                mostrarError('Por favor, Ingrese el Lugar de la Infracción');
                return;
            }
            // if (placa_de_rodaje.trim() === '') {
            //     mostrarError('Por favor, Ingrese el Numero de la Placa de Rodaje de la Infracción');
            //     return;
            // }
            if (fecha_deteccion.trim() === '') {
                mostrarError('Por favor, Ingrese la Fecha de Detención de la Infracción');
                return;
            }
            if (hora_deteccion.trim() === '') {
                mostrarError('Por favor, Ingrese la Hora de Detención de la Infracción');
                return;
            }
            if (fecha_notificacion.trim() === '') {
                mostrarError('Por favor, Ingrese la Fecha de Notificación de la Infracción');
                return;
            }
            if (hora_notificacion.trim() === '') {
                mostrarError('Por favor, Ingrese la Hora de Notificación de la Infracción');
                return;
            }
            // if (nombres.trim() === '') {
            //     mostrarError('Por favor, Ingrese el Nombre del Infractor');
            //     return;
            // }
            // if (apellidos.trim() === '') {
            //     mostrarError('Por favor, Ingrese el Apellido del Infractor.');
            //     return;
            // }
            // if (relacion_del_infractor.trim() === '') {
            //     mostrarError('Por favor, Ingrese la Relación del Infractor.');
            //     return;
            // }
            // if (numero_documento.trim() === '') {
            //     mostrarError('Por favor, Ingrese el Numero de Documento del Infractor.');
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
            enlace.download = "NOTIFICACION_PREVENTIVA.jpg"; // Nombre de archivo para la descarga

            // Simular un clic en el enlace para iniciar la descarga
            document.body.appendChild(enlace);
            enlace.click();

            // Limpiar el enlace temporal
            document.body.removeChild(enlace);
        });
    });
</script>      


@endsection