<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <?php $this->load->view("componentes/Bootstrap_view");?>

        <?php $this->load->view("componentes/jQuery_view");?>

        <?php $this->load->view("componentes/Datatables_view");?>

        <!-- Incluir jsPDF desde un CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


    <title>Document</title>
</head>
<body>


    <div class="container">

     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

  <div class="container-fluid">

  
    
    <a class="navbar-brand" href="#">Logo</a>
    
    <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse"
            data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item" style="margin-top:-12px;">


          <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#modalIngresarNuevosAlumnos">Registrar nuevo alumno</a>


          <!--MODAL INGRESAR NUEVOS ALUMNOS -->
          <div class="modal" id="modalIngresarNuevosAlumnos">

              <div class="modal-dialog">
    
                  <div class="modal-content">

                      <!-- Modal Header -->

                      <div class="modal-header">

                          <h4 class="modal-title">Registrar RUT de alumno</h4>
                          
                          <!--BOTON CERRAR MODAL( X )-->
                          
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      
                      </div>

                      <!-- Modal body -->

                      <!-- Modal Body -->
                      <div class="modal-body">
                        <form id="formCrearUsuario">
                          <div class="mb-3">
                            <label for="inputRUT" class="form-label">RUT</label>
                            <input type="text" class="form-control" id="inputRUT" placeholder="Ingrese el RUT">
                          </div>
                          <div class="mb-3">
                            <label for="nombres_input" class="form-label">Nombres</label>
                            <input type="password" class="form-control" id="nombres_input" placeholder="Ingrese su nombre">
                          </div>
                          <div class="mb-3">
                            <label for="apellidos_input" class="form-label">Apellidos</label>
                            <input type="password" class="form-control" id="apellidos_input" placeholder="Ingrese su apellido">
                          </div>
                        </form>
                      </div>
                      
                      <!-- <div class="modal-body">

                        <label for="ingresarNuevoAlumno">RUT Alumno:</label>
                        <input id="ingresarNuevoAlumno" name="rutUsuario" type="text" form="ingresarAlumnoV2"><br>

                        <label for="ingresarContraseñaNuevoAlumno">Contraseña:</label>
                        <input id="ingresarContraseñaNuevoAlumno" name="contraseñaUsuario" type="text" form="ingresarAlumnoV2">
                        
                        
                      </div> -->
      

                      <!-- Modal footer -->

                      <div class="modal-footer">

                          <div class="justify-content-center">

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="btnCrearUsuario">Crear Usuario</button>
                          </div>

                            
                              <!-- <input id="boton_crear_usuario" type="submit" class="btn btn-success" value="Enviar" form="ingresarAlumnoV2"> -->

                              <!-- <button id="boton_crear_usuario" type="button" class="btn btn-success" data-bs-dismiss="modal">Crear</button>
                              
                              <button type="button" class="btn btn-muted border border-2 border-gray bg-light" data-bs-dismiss="modal">Cancelar</button> -->
                          
                          </div>
                      
                      </div>

                  </div>
              
              </div>

          </div>

        <!--MODAL INGRESAR NUEVOS ALUMNOS -->

        </li>
        <li class="nav-item" style="margin-top:-12px;">
          <a class="nav-link" href="#">Cambiar Contraseña</a>
        </li>

      </ul>


      <div class="d-flex">
        
        <button class="btn btn-danger" type="button"  data-bs-toggle="modal" data-bs-target="#modalCerrarSesion">Cerrar Sesión</button>

        <!--MODAL CERRAR SESIÓN -->
<div class="modal" id="modalCerrarSesion">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Está a punto de cerrar sesión</h4>
        <!--BOTON CERRAR MODAL( X )-->
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      

      <!-- Modal footer -->
      <div class="modal-footer">

          <div class="justify-content-center">


	    <a class="btn btn-danger" href="<?=base_url('cerrarSesion')?>">Cerrar sesion</a>

        <button type="button" class="btn btn-muted border border-2 border-gray bg-light" data-bs-dismiss="modal">Cancelar</button>


          </div>
      
      </div>

    </div>
  </div>
</div>

        <!--MODAL CERRAR SESIÓN -->

      </div>
    </div>
  </div>
</nav>
        
<?php $nombreUsuario = strtoupper($this->session->userdata("nombres")."  ".$this->session->userdata("apellidos"));?> 

      <!-- <p class="h3">Nombre de coordinador: <b class="h6"><?=$nombreUsuario?></b> </p>  -->

      
      <p class="h3">Lista de Alumnos:</p>


<table id="tablaAlumnos" class="display table" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>   
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rut</th>   
                <th>Acciones</th>   

            </tr>
        </thead>
        
    </table>

      <!--  Modal Ver Reporte -->
      <div class="modal" id="modalVerReporte">
        <div class="modal-dialog">
          <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Reporte </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a class="btn btn-danger btnDescargarReporte" data-bs-dismiss="modal" title="Descargar documento PDF">Descargar Reporte </a>

      </div>

    </div>
  </div>
</div>
   
    </div>



<script>

$(document).ready(function(){

listarTabla();

});
var listarTabla = function(){
  $(document).ready(function () {
    var table = $('#tablaAlumnos').DataTable({
        destroy: true,
        ajax: {
            url: "<?= base_url('todosLosAlumnos'); ?>",
            type: "POST"
        },
        language: { url: '<?= base_url("assets/datatables-Spanish.json"); ?>' },
        columns: [
            { "data": "id" },
            { "data": "nombreAlumnos" },
            { "data": "apellidos" },
            { "data": "rutUsuario" },
            {
                "defaultContent": "<div class='btn-group'>" +
                    "<button type='button' class='btn btn-success btn-ver-reporte' data-bs-toggle='modal' data-bs-target='#modalVerReporte'>Ver reporte</button>" +
                    //"<button type='button' class='btn btn-warning'>Bloquear Alumno</button>" +
                    "</div>"
            }
        ],
    });

    // Delegar evento click al botón 'btn-ver-reporte'
    $('#tablaAlumnos').on('click', '.btn-ver-reporte', function () {
        // Obtener la fila donde se hizo clic
        var fila = $(this).closest('tr'); // Encuentra la fila más cercana
        var data = table.row(fila).data(); // Obtiene los datos de la fila con DataTables

        // Extraer nombre y RUT
        var nombre = data.nombreAlumnos;
        var apellido = data.apellidos;
        var rut = data.rutUsuario;

        // Mostrar los datos en el modal
        $('#modalVerReporte .modal-body').html(`
            <p id="nombre_completo_modal"><strong>Nombre:</strong> ${nombre} ${apellido}</p>
            <p id="rut_en_modal"><strong>RUT:</strong> ${rut}</p>
        `);

        let respuestas_formulario_sociodemo = []; 
        let jsonData = JSON.stringify(rut);

        $.ajax({
            url: "<?= base_url('consultarRespuestasSocioDemoPorRut');?>", // Cambia la URL al endpoint correspondiente
            type: "POST",
            contentType: "application/json", // Indica que envías JSON
            data: jsonData, // Enviar el RUT como JSON
            success: function (response) {
                // Almacenar la respuesta en el arreglo
                respuestas_formulario_sociodemo = response; // Suponiendo que 'response' es un objeto o arreglo JSON
                // alert("Consulta realizada correctamente y datos almacenados.");
                // alert(respuestas_formulario_sociodemo);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
                alert("Ocurrió un error al procesar la solicitud.");
            }
        }); 

        $.ajax({
            url: "<?= base_url('consultarRespuestasMSLQPorRut');?>", // Cambia la URL al endpoint correspondiente
            type: "POST",
            contentType: "application/json", // Indica que envías JSON
            data: jsonData, // Enviar el RUT como JSON
            success: function ($response) {
                // Almacenar la respuesta en el arreglo
                //respuestas_formulario_MSLQ = response; // Suponiendo que 'response' es un objeto o arreglo JSON
                let respuestas_formulario_MSLQ = JSON.parse($response);

                // Accedemos al primer objeto dentro de la propiedad 'message'
                //let respuestas_formulario_MSLQ = response.message[0];

                // Calcular promedios y porcentajes
                let suma = 0;
                let contador = 0;
                let promedio = 0;

                // Recorre las preguntas de la 1 a la 9
                for (let i = 1; i <= 9; i++) {
                    let preguntaKey = "respuesta_" + i;
                    
                    let valor = parseInt(respuestas_formulario_MSLQ.message[0][preguntaKey]);
                    
                    // Asegúrate de que el valor es un número
                    suma += valor; // Agrega el valor al total
                    contador++;    // Incrementa el contador
                }

                // Calcula el promedio y lo divide entre 7
                promedio_dim1 = (contador > 0) ? (suma / contador) / 7 : 0;

                // Calcular promedios y porcentajes
                suma = 0;
                promedio = 0;
                contador = 0;

                // Recorre las preguntas de la 1 a la 9
                for (let i = 10; i <= 18; i++) {
                    let preguntaKey = "respuesta_" + i;
                    
                    let valor = parseInt(respuestas_formulario_MSLQ.message[0][preguntaKey]);
                    
                    // Asegúrate de que el valor es un número
                    suma += valor; // Agrega el valor al total
                    contador++;    // Incrementa el contador
                }

                // Calcula el promedio y lo divide entre 7
                promedio_dim2 = (contador > 0) ? (suma / contador) / 7 : 0;

                // Calcular promedios y porcentajes
                suma = 0;
                promedio = 0;
                contador = 0;

                // Recorre las preguntas de la 1 a la 9
                for (let i = 19; i <= 22; i++) {
                    let preguntaKey = "respuesta_" + i;
                    
                    let valor = parseInt(respuestas_formulario_MSLQ.message[0][preguntaKey]);
                    
                    // Asegúrate de que el valor es un número
                    suma += valor; // Agrega el valor al total
                    contador++;    // Incrementa el contador
                }

                // Calcula el promedio y lo divide entre 7
                promedio_dim3 = (contador > 0) ? (7 - (suma / contador)) / 7 : 0;

                // Calcular promedios y porcentajes
                suma = 0;
                promedio = 0;
                contador = 0;

                // Recorre las preguntas de la 1 a la 9
                for (let i = 23; i <= 35; i++) {
                    let preguntaKey = "respuesta_" + i;
                    
                    let valor = parseInt(respuestas_formulario_MSLQ.message[0][preguntaKey]);
                    
                    // Asegúrate de que el valor es un número
                    suma += valor; // Agrega el valor al total
                    contador++;    // Incrementa el contador
                }

                // Calcula el promedio y lo divide entre 7
                promedio_dim4 = (contador > 0) ? (suma / contador) / 7 : 0;

                // Calcular promedios y porcentajes
                suma = 0;
                promedio = 0;
                contador = 0;

                // Recorre las preguntas de la 1 a la 9
                for (let i = 36; i <= 44; i++) {
                    let preguntaKey = "respuesta_" + i;
                    
                    let valor = parseInt(respuestas_formulario_MSLQ.message[0][preguntaKey]);
                    
                    // Asegúrate de que el valor es un número
                    suma += valor; // Agrega el valor al total
                    contador++;    // Incrementa el contador
                }

                // Calcula el promedio y lo divide entre 7
                promedio_dim5 = (contador > 0) ? (suma / contador) / 7 : 0;

                promedio_total = (promedio_dim1 + promedio_dim2 + promedio_dim3 + promedio_dim4 + promedio_dim5) *100 / 5

                // Muestra el promedio en el modal
                $('#modalVerReporte .modal-body').append(`<p><strong>Promedio MSLQ general:</strong> % ${promedio_total.toFixed(2)}</p>`);
                $('#modalVerReporte .modal-body').append(`<p><strong>Dimensión "Motivación Intrínseca":</strong> % ${(promedio_dim1 * 100).toFixed(2)}</p>`);
                $('#modalVerReporte .modal-body').append(`<p><strong>Dimensión "Auto eficacia":</strong> % ${(promedio_dim2 * 100).toFixed(2)}</p>`);
                $('#modalVerReporte .modal-body').append(`<p><strong>Dimensión "Ansiedad ante evaluaciones":</strong> % ${(promedio_dim3 * 100).toFixed(2)}</p>`);
                $('#modalVerReporte .modal-body').append(`<p><strong>Dimensión "Uso de estrategias metacognitivas":</strong> % ${(promedio_dim4 * 100).toFixed(2)}</p>`);
                $('#modalVerReporte .modal-body').append(`<p><strong>Dimensión "Autorregulación":</strong> % ${(promedio_dim5 * 100).toFixed(2)}</p>`);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
                alert("No se recupero ningún formulario con ese rut.");
            }
        });


    });

    
});


        obtenerDatosEditar("#tablaAlumnos tbody",table);

     }     
    
  




let obtenerDatosEditar = function(tbody, table)
{
  $(tbody).on("click", "button.btn-warning", function(){
    var data = table.row( $(this).parents("tr") ).data();
    console.log(data);
  })

}
</script>

  <script>
      // jQuery para generar y descargar el PDF cuando se hace click en "Descargar Reporte"
      $(document).ready(function() {
          $('.btnDescargarReporte').click(function(e) {
            
              e.preventDefault();

              // Extraer el RUT del modal
              const rut = $('#rut_en_modal').text().split(": ")[1]; // Extrae el RUT de la cadena
              // Extraer el RUT del modal
              const nombre_completo = $('#nombre_completo_modal').text().split(": ")[1]; // Extrae el RUT de la cadena

              console.log(rut);
              console.log(nombre_completo);


              
              // Crear una instancia de jsPDF
              const { jsPDF } = window.jspdf;
              const doc = new jsPDF();

              doc.text(`RUT: ${rut}`, 10, 20);
              doc.text(`Nombre completo: ${nombre_completo}`, 10, 30);

              // Extraer datos de la BD
              let respuestas_formulario_sociodemo = []; 
              let jsonData = JSON.stringify(rut);

              $.ajax({
                  url: "<?= base_url('consultarRespuestasSocioDemoPorRut');?>", // Cambia la URL al endpoint correspondiente
                  type: "POST",
                  contentType: "application/json", // Indica que envías JSON
                  data: jsonData, // Enviar el RUT como JSON
                  success: function (response) 
                  {
                      doc.text('Perfil sociodemográfico:', 10, 40);
                      // Almacenar la respuesta en el arreglo
                      respuestas_formulario_sociodemo = response; // Suponiendo que 'response' es un objeto o arreglo JSON
                      // alert("Consulta realizada correctamente y datos almacenados.");
                      alert(respuestas_formulario_sociodemo);
                      carrera = respuestas_formulario_sociodemo.[1]['carrera'];
                      console.log(carrera);
                      doc.text(`Carrera: ${carrera}`, 10, 50);
                  },
                  error: function (xhr, status, error) {
                      console.error("Error:", error);
                      alert("Ocurrió un error al procesar la solicitud.");
                  }
              }); 
              

              // Añadir texto al PDF
              
              
              
              //doc.text(`Promedio: ${promedio}`, 10, 30);

              // Descargar el PDF
              doc.save('reporte.pdf');
          });
      });
  </script>

  <script>
      document.addEventListener('DOMContentLoaded', function (e) {
          
          // Seleccionar todos los botones "Ver Reporte"
          const botones = document.querySelectorAll('.btn-ver-reporte');

          botones.forEach(boton => {
              boton.addEventListener('click', function (e) {
                  e.preventDefault();
                  console.log("holaa");
                  // Encontrar la fila más cercana al botón
                  const fila = boton.closest('tr');

                  // Obtener las celdas de la fila
                  const nombre = fila.cells[1].innerText; // Segunda columna (Nombre)
                  const rut = fila.cells[2].innerText;    // Tercera columna (RUT)

                  // Insertar los datos en el cuerpo del modal
                  const modalBody = document.querySelector('#modalVerReporte .modal-body');
                  modalBody.innerHTML = `
                      <p><strong>Nombre:</strong> ${nombre}</p>
                      <p><strong>RUT:</strong> ${rut}</p>
                  `;
              });
          });
      });
  </script>


  <script>
  
      $(document).ready(function() {
      // Evento click para el botón "Crear Usuario"
      $('#btnCrearUsuario').click(function() {
        // Obtener los valores de los campos de texto
        const rut = $('#inputRUT').val().trim();
        const nombres = $('#nombres_input').val().trim();
        const apellidos = $('#apellidos_input').val().trim();

        // Validar que los campos no estén vacíos
        if (!rut || !nombres || !apellidos) {
          alert('Por favor, complete todos los campos.');
          return;
        }

        // Realizar la solicitud AJAX POST
        $.ajax({
          url: "<?= base_url('ingresarAlumno');?>", // Cambia esta URL por la ruta de tu servidor
          type: 'POST',
          contentType: 'application/json',
          data: JSON.stringify({ rut: rut, nombres: nombres, apellidos: apellidos }),
          success: function(response) {
            // Manejar respuesta del servidor
            alert('Usuario creado exitosamente.');
            // Cerrar el modal
            $('#modalCrearUsuario').modal('hide');
            // Resetear el formulario
            $('#formCrearUsuario')[0].reset();
          },
          error: function(xhr, status, error) {
            // Manejar errores
            console.error('Error:', error);
            alert('Ocurrió un error al crear el usuario.');
          }
        });
      });
    });


    </script>



</body>
</html>

