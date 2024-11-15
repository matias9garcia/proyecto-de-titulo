

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
                        <form action="<?= base_url("");?>">

                        <label for="ingresarRUT">RUT coordinador:</label>
                        <input id="ingresarRUT" name="coordinadorRUT" type="text"><br>

                        <label for="nombreCoordinador">Nombres:</label>
                        <input id="nombreCoordinador" name="coordinadorNombres" type="text"><br>

                        <label for="apellidosCoordinador">Apellidos:</label>
                        <input id="apellidosCoordinador" name="coordinadorApellidos" type="text"><br>

                        

                        
                      </div>
      

                      <!-- Modal footer -->

                      <div class="modal-footer">

                          <div class="justify-content-center">
                              
                       
                            
                              <input type="submit" class="btn btn-success" value="Enviar">
                              
                              <button type="button" class="btn btn-muted border border-2 border-gray bg-light" data-bs-dismiss="modal">Cancelar</button>
                          
                          </div>
                      </form>
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

<?php $nombres="nombres";
      $apellidos="apellidos";?>
	

      <p class="h3">Nombre de admin: <?=$nombres." ".$apellidos?></p>
      <p class="h3">Correo electrónico:</p>


      <p class="h3">Lista de usuarios:</p>


<table id="tablaAlumnos" class="display table" style="width:100%">
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

   
    </div>

<script>
	



$(document).ready(function(){
     $('#tablaAlumnos').DataTable({
        
        ajax:{
		    url: "<?= base_url("Administrador/Usuarios");?>",
            type:"POST"
        },
        
        "columns":[
            {"data":"id"},

            {"data":"nombreUsuarios"},
            {"data":"Acciones"},
        ],
		language: {
        processing:     "Procesando datos...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ Alumnos",
        info:           "Mostrando p&aacute;gina _START_ de _END_ paginas, _TOTAL_ elementos",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "aaa",
        loadingRecords: "Cargando datos...",
        zeroRecords:    "Sin datos",
        emptyTable:     "Sin datos",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "&Uacute;ltimo"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
     });



     $('#tablaCoordinadores').DataTable({
        
        ajax:{
		    url: "<?= base_url("Administrador_controler/mostrarUsuarios");?>",
            type:"POST"
        },
        
        "columns":[
            {"data":"id"},

            {"data":"nombreUsuarios"},
            {"data":"Acciones"},
        ],
		language: {
        processing:     "Procesando datos...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ Coordinadores",
        info:           "Mostrando p&aacute;gina _START_ de _END_ paginas, _TOTAL_ elementos",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Cargando datos...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "&Uacute;ltimo"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
     });
        
        });
</script>
</body>
</html>

