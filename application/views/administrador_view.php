

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <?php $this->load->view("componentes/Bootstrap_view");?>

        <?php $this->load->view("componentes/jQuery_view");?>
        
        <?php $this->load->view("componentes/Datatables_view");?>


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


          <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#modalIngresarNuevosAlumnos">Registrar nuevo coordinador</a>


          <!--MODAL INGRESAR NUEVOS ALUMNOS -->
          <div class="modal" id="modalIngresarNuevosAlumnos">

              <div class="modal-dialog">
    
                  <div class="modal-content">

                      <!-- Modal Header -->

                      <div class="modal-header">

                          <h4 class="modal-title">Registrar  datos de coordinador</h4>
                          
                          <!--BOTON CERRAR MODAL( X )-->
                          
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      
                      </div>

                      <!-- Modal body -->
                      
                      <div class="modal-body">
                        <form id="formIngresarCoordinador"
                               method="post"
                                action="<?= base_url("Administrador/IngresarNuevoCoordinador");?>"></form>

                        <label for="ingresarRUT">RUT coordinador:</label>
                        <input id="ingresarRUT" name="rutUsuario" type="text" form="formIngresarCoordinador"><br>

                        <label for="nombreCoordinador">Nombres:</label>
                        <input id="nombreCoordinador" name="nombresUsuario" type="text" form="formIngresarCoordinador"><br>

                        <label for="apellidosCoordinador">Apellidos:</label>
                        <input id="apellidosCoordinador" name="apellidosUsuario" type="text" form="formIngresarCoordinador"><br>

                        

                        
                      </div>
      

                      <!-- Modal footer -->

                      <div class="modal-footer">

                          <div class="justify-content-center">
                              
                       
                            
                              <input type="submit" class="btn btn-success" value="Enviar" form="formIngresarCoordinador">
                              
                              <button type="button" class="btn btn-muted border border-2 border-gray bg-light" data-bs-dismiss="modal">Cancelar</button>
                          
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
        <li class="nav-item" style="margin-top:-12px;">
          <a class="nav-link" href="#">Link</a>
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

        <h1>Administrador_controller</h1>



<?php $nombreUsuario = strtoupper($this->session->userdata("nombres")."  ".$this->session->userdata("apellidos"));?> 
	

      <p class="h3">Nombre de admin: <b class="h6"><?=$nombreUsuario?></b></p>
      <p class="h3">Correo electrónico:</p>


      <p class="h3">Lista de usuarios:</p>


<table id="tablaAdministradores" class="display table" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>

</table>

<table id="tablaCoordinadores" class="display table" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>

</table>

<table id="tablaAlumnos" class="display table" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre usuario</th>
            <th>Acciones</th>

            
        </tr>
    </thead>

</table>

   
    </div>

<script>
	



$(document).ready(function(){


  $('#tablaCoordinadores').DataTable({
        
        ajax:{
		    url: "<?= base_url("Usuarios");?>",
            type:"POST"
        },
        
        columns:[
            {"data":"id"},

            {"data":"nombreUsuarios"},
            
            {"defaultContent":  " <div class='btn-group'><button type='button' class='btn btn-secondary' >Reiniciar Contraseña</button><button type='button' class='btn btn-warning'>Bloquear Alumno</button></div> "}

        ],
		language: {url:'<?= base_url("assets/datatables-Spanish.json");?>'}
     });



     $('#tablaAlumnos').DataTable({
        destroy:true,
        
        ajax:{
		        url: "<?= base_url("todosLosAlumnos");?>",
            type:"POST"
        },
        language: {url:'<?= base_url("assets/datatables-Spanish.json");?>'},
        
        columns:[
            {"data":"id"},

            {"data":"nombreAlumnos"},
            
            {"defaultContent":  " <div class='btn-group'><button type='button' class='btn btn-secondary' >Reiniciar Contraseña</button><button type='button' class='btn btn-warning'>Bloquear Alumno</button></div> "}

        ],
		
     });



     
        
        });
</script>


<script>
  
  $("#formIngresarCoordinador").submit(  function(ev){
    ev.preventDefault();

	  $.ajax({
      
      url: "<?= base_url("Administrador/IngresarNuevoCoordinador");?>",
	  	type: "post",
      
	  	data: $(this).serialize(),
      
	  	success: function (err) 
          {
            alert("exito");
	  		//var json = JSON.parse(err);
	  		//console.log(json);
          
	  		//alert(json);
	  		//window.location.replace(json.url);
	  	},
	  	statusCode: 
          {
	  		400: function (xhr) {
	  			var json = JSON.parse(xhr.responseText);
              
              
	  			console.log(json);
              
	  		},
          
          
	  	},
	  });
	
	});

    </script>
</body>
</html>

