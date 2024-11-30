
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php $this->load->view("componentes/Bootstrap_view");?>

        <?php $this->load->view("componentes/jQuery_view");?>

    <title>Encuesta de Estrategias Motivacionales y de Aprendizaje</title>
</head>


<body style="background-color:#F0F0F0">

<div class="container border  border-gray bg-light">
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


    <h1>Formulario Sociodemografico:</h1>


    <p>A continuación deberá ingresar su información personal</p>
    <hr>


    <form   id="formSocio" 
            action="<?=base_url('validarFormularioSocio')?>" 
            method="POST">



    <!--Ingresar Rut-->
    <section class="row">


        <div    class="col-md-4 form-group"
                id="form_group_formSocio_rut">
            <label  for = "formSocio_rut" 
                    class = "form-label"  >
                *RUT:
            </label>


            <input  type = "text"
                    class = "form-control " 
                    id = "formSocio_rut" 
                    placeholder = "Ingresar RUT en formato 12345678-9" 
                    name = "formSocio_rut" 
                    value = <?=$this->session->userdata("rut")?>>
    
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->

        </div>
    </section>

<br><br>

    <section class="row">

    <!--Ingresar Nombre-->
        <div    class="col-md-6 form-group"
                id="form_group_formSocio_nombres">
        
                <label  for = "formSocio_nombres"
                        class = "form-label">
                    *Nombres:
                </label>
                <input  type = "text" 
                        class = "form-control" 
                        id = "formSocio_nombres" 
                        placeholder = "Ingresar Nombres" 
                        name = "formSocio_nombres" >
            
                <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>

<!--Ingresar Apellidos-->

        <div    class="col-md-6 form-group "
                id="form_group_formSocio_apellidos">
            
            <label  for = "formSocio_apellidos" 
                    class = "form-label">
                *Apellidos:
            </label>
            <input  type = "text" 
                    class = "form-control" 
                    id = "formSocio_apellidos" 
                    placeholder="Ingresar Apellidos" 
                    name="formSocio_apellidos" >

            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        
        </div>



        
    </section>

<!--Fin Ingresar Apellidos-->

<br><br><br>
    
    <section class="row form-group">

        
    
        <div class="col-md-4 ">
            <div    class=" form-group"
                    id = "form_group_formSocio_nacionalidad">
                <label  for = "formSocio_nacionalidad">
                    * Nacionalidad:
                </label>
                <input  type = "text" 
                        class = "form-control"
                        id = "formSocio_nacionalidad" 
                        placeholder = "Ingresar Nacionalidad" 
                        name = "formSocio_nacionalidad" >

                <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
            </div>
        </div>
    
        <div    class="col-md-2 form-group"
                id = "form_group_formSocio_edad">
        
            <label for="formSocio_edad">
                * Edad:
            </label>
            <input  type="text" class="form-control" 
                    id="formSocio_edad" 
                    placeholder="Ingresar Edad" 
                    name="formSocio_edad" >
        
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
    
        </div>

    </section>

<br><br><br>

    <section class="row">
        
        <div class="col-md-4 form-group"
            id = "form_group_formSocio_genero">

            <p id="formSocio_genero">
                * Género:
            </p>

            <select id="formSocio_genero" name="formSocio_genero">

    <option value="NULL">Seleccione su género</option>
    <option value="femenino">Femenino</option>
    <option value="masculino">Masculino</option>
    <option value="noResonder">Prefiero no responder</option>


</select><br>

<!--mensaje de error LLENAR CAMPO-->
            <div  class="invalid-feedback"></div>
        
        </div>
        
    </section>
    <br>
    <br>
    <br>
    <section class="row">
        <div class="col-md-4 form-group"
            id="form_group_formSocio_carreraActual">

            <p id="formSocio_carreraActual">
                * Seleccionar su carrera actual:
            </p>
            
            <select id="formSocio_carreraActual" name="formSocio_carreraActual">

    <option value="NULL">Seleccionar su carrera actual</option>
    <option value="ingCivilInf">Ingeniería Civil en Informática</option>
    <option value="ingInf">Ingeniería en Informática</option>
    <option value="ingCivilCiencia">Ingeniería Civil en Ciencia de Datos</option>

</select><br>
        
        
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>

    </section>


<br><br><br>

    <section class="row">
        <div class="col-md-8 form-group"
            id="form_group_formSocio_carreraPrimeraOpcionSiNo">
        
        <p id="formSocio_carreraPrimeraOpcionSiNo">
            * ¿La carrera a la cual te has inscrito fue tu primera opción?:
        </p>

            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formSocio_carreraPrimeraOpcionSi">
                    <input  class="form-check-input"
                            type="radio"
                            name="formSocio_carreraPrimeraOpcionSiNo" 
                            id="formSocio_carreraPrimeraOpcionSi" 
                            value="Si" > Si
                </label>

            </div>
            
            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formSocio_carreraPrimeraOpcionNo">
                    <input  class="form-check-input"
                            type="radio"
                            name="formSocio_carreraPrimeraOpcionSiNo" 
                            id="formSocio_carreraPrimeraOpcionNo" 
                            value="No" > No
                </label>

            </div>

            
            <!--mensaje de error RESPONDER RADIO-->
            <div id="radioCarreraPrimeraOpcion" class="invalid-feedback"></div>
            



            <div    class="col-md-4 form-group" 
                    id="form_group_formSocio_carreraPrimeraOpcion">

                <label  for="formSocio_carreraPrimeraOpcionIngresar">
                        * Ingrese la primera carrera que eligió:
                </label>
                <input  type="text"
                        class="form-control "
                        id="formSocio_carreraPrimeraOpcionIngresar" 
                        name = formSocio_carreraPrimeraOpcion >

                
                <!--mensaje de error LLENAR CAMPO-->    
                <div class="invalid-feedback"></div>
            </div>

            
        </div>
    </section>

<br><br><br>


    <section class="row">
        
        <div class="col-md-4 "
            id="form_group_formSocio_convivencia">

            <p id="formSocio_convivencia">
                * ¿Con quién vive?
            </p>
            
            <select id="formSocio_convivencia" name="formSocio_convivencia">

    <option value="NULL">Seleccionar su convivencia</option>
    <option value="familia">Con mi familia</option>
    <option value="pension">Pensión</option>
    <option value="pareja">Pareja</option>
    <option value="solo">Soltero(a)</option>

</select><br>
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>
        
       

        
    </section>

<br><br><br>
        
    <section class = "row">
        <div class = "col-md-6 form-group"
                id="form_group_formSocio_trayecto">
            <p  id = "formSocio_trayecto">
                Normalmente, ¿Cuánto tarda en llegar a la Escuela de Ingeniería Informática?
            </p>
        

        <select id="formSocio_trayecto" name="formSocio_trayecto">

    <option value="NULL">Seleccionar su tiempo de trayecto</option>
    <option value="menos30">Menos de 30 minutos</option>
    <option value="igual30">30 minutos</option>
    <option value="mas30">Más de 30 minutos</option>
    <option value="masHora">Más de una hora</option>

</select><br>
        
        <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
</div>
    </section>

<br><br><br>
      
        
    <section class="row">
        <div    class="col-md-4 form-group"
                id="form_group_formSocio_carreraDePrecedenciaSiNo"><!--form-control-->
            
            <p id="formSocio_carreraDePrecedenciaSiNo">
                *¿Provienes de otra carrera? 
            </p>

                <div class="form-check form-check-inline">

                    <label  class="form-check-label"
                            for="formSocio_carreraDePrecedenciaSi">

                        <input  id="formSocio_carreraDePrecedenciaSi"
                                class="form-check-input"
                                type="radio" 
                                name="formSocio_carreraDePrecedenciaSiNo" 
                                value="Si" >
                                Si
                    </label>
                </div>
            
                <div class="form-check form-check-inline">
                    
                    <label  class="form-check-label"
                            for="formSocio_carreraDePrecedenciaNo">

                        <input  id="formSocio_carreraDePrecedenciaNo"
                                class="form-check-input"
                                type="radio"
                                name="formSocio_carreraDePrecedenciaSiNo" 
                                value="No" >
                                No
                    </label>



                </div>
                <div id="radiocarreraDePrecedenciaSiNo" class="invalid-feedback"></div>


        </div>

        <div    class="col-md-4 form-group"
                id ="form_group_formSocio_carreraDePrecedenciaIngresar">
            <label for="formSocio_carreraDePrecedenciaIngresar">
                * Ingresa la carrera de la que provienes:
            </label>
            <input  type="text" 
                    class="form-control" 
                    id="formSocio_carreraDePrecedenciaIngresar" 
                    name = "formSocio_carreraDePrecedenciaIngresar"
                    >
            <div id="radiocarreraDePrecedenciaTexto" class="invalid-feedback">qq</div>
        </div>       
    </section>

<br><br><br>

    <section class="row">
        <div    class="col-md-4 form-group"
                id="form_group_formSocio_razonParaElegirLaCarreraActual">


            <p id="formSocio_razonParaElegirLaCarreraActual">
                ¿Cómo y por qué eligió la carrera que cursa?
            </p>

            <label   for="formSocio_razonParaElegirLaCarreraActualEleccionLibre">
                <input  class="form-check-input"
                        type="radio" 
                        name="formSocio_razonParaElegirLaCarreraActual" 
                        id="formSocio_razonParaElegirLaCarreraActualEleccionLibre"
                        value="eleccionLibre">
                        Fue elección libre
            </label>
        <br>

            <label  for="formSocio_razonParaElegirLaCarreraActualPrimeraPreferencia">
                <input  class="form-check-input"
                        type="radio" 
                        name="formSocio_razonParaElegirLaCarreraActual" 
                        id="formSocio_razonParaElegirLaCarreraActualPrimeraPreferencia"
                        value="primeraPreferencia">
                        Fue primera preferencia
            </label>
        <br>
        
            <label  for="formSocio_razonParaElegirLaCarreraActualTradicionFamiliar">
                <input  class="form-check-input"
                        type="radio" 
                        name="formSocio_razonParaElegirLaCarreraActual" 
                        id="formSocio_razonParaElegirLaCarreraActualTradicionFamiliar"
                        value="tradicionFamiliar">
                        Es una tradición familiar
            </label>
        <br>
           
            <label  for="formSocio_razonParaElegirLaCarreraActualDescarte">
                <input  class="form-check-input"
                        type="radio" 
                        name="formSocio_razonParaElegirLaCarreraActual" 
                        id="formSocio_razonParaElegirLaCarreraActualDescarte"
                        value="descarte">
                        Por descarte
            </label>
        <br>
            <label  for="formSocio_razonParaElegirLaCarreraActualOtroMotivo">
                <input  class="form-check-input"
                        type="radio" 
                        name="formSocio_razonParaElegirLaCarreraActual" 
                        id="formSocio_razonParaElegirLaCarreraActualOtroMotivo"
                        value="otroMotivo">
                        Otro motivo:
                        
                        
            </label>
            <div id="radioRazonParaElegirLaCarreraActual" class="invalid-feedback"></div>
            
            <br>
            <br>
            <div id="form_group_formSocio_razonParaElegirLaCarreraActualIngresarMotivo">
                <textarea   type="text"
                    class="form-control" 
                    id="formSocio_razonParaElegirLaCarreraActualMotivo"
                    name = "formSocio_razonParaElegirLaCarreraActualIngresarMotivo"
                    placeholder="Ingresar el/los motivo(s) de su elección"
                    >
</textarea >
                <div id="razonParaElegirLaCarreraActualOtroMotivo" class="invalid-feedback"></div>
            
            </div>
            

        </div>
    

    </section>

<br><br><br>

    <section class="row">
        <div class="col-md-5 form-group"
                id="form_group_formSocio_condicionMentalDiagnosticadaSiNoNose">
            <p id="formSocio_condicionMentalDiagnosticadaSiNoNose">
                ¿Tiene algún tipo de condicion mental diagnosticada? 
            </p>

            <div class="col-md-2 ">
                <label  for="formSocio_condicionMentalDiagnosticadaSi">
                    <input  class="form-check-input radio" 
                            type="radio" 
                            id="formSocio_condicionMentalDiagnosticadaSi" 
                            value="Si"
                            name="formSocio_condicionMentalDiagnosticadaSiNoNose"                 
                            >
                            Si
                </label>
            </div>
      
            <div class="col-md-2">
                <label  for="formSocio_condicionMentalDiagnosticadaNo">
                    <input  class="form-check-input radio"
                            type="radio" 
                            id="formSocio_condicionMentalDiagnosticadaNo" 
                            value="No"
                            name="formSocio_condicionMentalDiagnosticadaSiNoNose" 
                            >
                            No
                </label>
            </div>
      
            <div class="col-md-5">
                <label for="formSocio_condicionMentalDiagnosticadaNoSe">
                    <input  class="form-check-input radio" 
                            type="radio" 
                            name="formSocio_condicionMentalDiagnosticadaSiNoNose" 
                            id="formSocio_condicionMentalDiagnosticadaNoSe" 
                            value="Nose"
                            >
                        No estoy seguro
                </label>
                
                
            </div>
                <div id="radioCondicionMentalSiNoNose" class="invalid-feedback"></div>

        </div>
        
        <div    class="col-md-6 form-group" 
                id="form_group_formSocio_nombreDeCondicionMentalDiagnosticada">
        
            <label  for = "formSocio_nombreDeCondicionMentalDiagnosticada"
                    class = "form-label" >
                *¿Cuál es su condición?
            </label>

            <input  type="text"
                    class="form-control" 
                    id="formSocio_nombreDeCondicionMentalDiagnosticada"
                    name = "formSocio_nombreDeCondicionMentalDiagnosticada"
                    >
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        
        </div>
    </section>        
               
<br><br><br><br>


    <section class="row">
        <div class="col-md-6 form-group"
                id="form_group_formSocio_beneficioGratuidadSiNo">
            <p id="formSocio_beneficioGratuidad">
                ¿Tiene beneficio de gratuidad?
            </p>

            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formSocio_beneficioGratuidadSi">
                            <input  class="form-check-input" 
                                    type="radio"
                                    name="formSocio_beneficioGratuidadSiNo" 
                                    id="formSocio_beneficioGratuidadSi" 
                                    value="Si">
                            Si
                </label>
            </div>
        
            <div class="form-check form-check-inline">
                
                <label  class="form-check-label" for="formSocio_beneficioGratuidadNo">
                    <input  class="form-check-input"
                            type="radio" 
                            name="formSocio_beneficioGratuidadSiNo" 
                            id="formSocio_beneficioGratuidadNo"
                            value="No"
                            >
                            No
                </label>
            </div>
            <!--mensaje de error LLENAR CAMPO-->
        
        <div id="radioBeneficioDeGratuidad" class="invalid-feedback"></div></div>
    </section>


<br><br><br>


<!--BOTON ENVIAR FORMULARIO-->
    <section class="row">
        <div class="col-md-9 aling-items-right">
            <button type="submit" 
                    class="btn btn-primary">
                    Enviar formulario
            </button>
        </div>
    </section>
</div>
</form>

<br>
    


<script>
$(document).ready(function(){

        $(" #form_group_formSocio_carreraDePrecedenciaIngresar ").hide();


        $(" #form_group_formSocio_nombreDeCondicionMentalDiagnosticada ").hide();

    $(" #form_group_formSocio_razonParaElegirLaCarreraActualIngresarMotivo ").hide();

        $(" #form_group_formSocio_carreraPrimeraOpcion ").hide();

        $(" #formSocio_carreraDePrecedencia > label , #formSocio_carreraDePrecedencia > input ").hide();
        

    //$("input").prop("required", true);
/* ¿Tiene algún tipo de condicion mental diagnosticada? */


    $(" #opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").hide();
    
    $(" #formSocio_condicionMentalDiagnosticadaSi ").click(function(){
        $(" #opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").show();
    }); 
    
    $(" #formSocio_condicionMentalDiagnosticadaNo").click(function(){
        $(" #opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").hide();
    });
    
    $(" #formSocio_condicionMentalDiagnosticadaNoSe ").click(function(){
        $( "#opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").hide();
    }); 

/** ¿La carrera a la cual te has inscrito fue tu primera opción?: */
    //$(" #formSocio_carreraPrimeraOpcion > label , #formSocio_carreraPrimeraOpcion > input ").hide();
    /**SI */



    $(" #formSocio_carreraPrimeraOpcionSi ").click(function(){
        $(" #form_group_formSocio_carreraPrimeraOpcion ").hide();
    });
    /**NO */
    $(" #formSocio_carreraPrimeraOpcionNo ").click(function(){
        $(" #form_group_formSocio_carreraPrimeraOpcion ").show();
    });
    
    $(" #formSocio_razonParaElegirLaCarreraActualOtroMotivo ").click(function(){
        $(" #form_group_formSocio_razonParaElegirLaCarreraActualIngresarMotivo ").show();
    });

       $(" #formSocio_razonParaElegirLaCarreraActualEleccionLibre, #formSocio_razonParaElegirLaCarreraActualPrimeraPreferencia, #formSocio_razonParaElegirLaCarreraActualTradicionFamiliar, #formSocio_razonParaElegirLaCarreraActualDescarte ").click(function(){
        $(" #form_group_formSocio_razonParaElegirLaCarreraActualIngresarMotivo ").hide();
    });


/*¿Provienes de otra carrera?*/ 
    //$(" #formSocio_carreraDePrecedencia > label , #formSocio_carreraDePrecedencia > input ").hide();
    
    $(" #formSocio_carreraDePrecedenciaSi ").click(function(){
        $(" #form_group_formSocio_carreraDePrecedenciaIngresar ").show();
    });
      $(" #formSocio_carreraDePrecedenciaNo ").click(function(){
        $(" #form_group_formSocio_carreraDePrecedenciaIngresar ").hide();
    });
    
    $(" #formSocio_condicionMentalDiagnosticadaSi ").click(function(){
        $(" #form_group_formSocio_nombreDeCondicionMentalDiagnosticada ").show();
    });

    $(" #formSocio_condicionMentalDiagnosticadaSiNoNose, #formSocio_condicionMentalDiagnosticadaNo ").click(function(){
        $(" #form_group_formSocio_nombreDeCondicionMentalDiagnosticada ").hide();
    });
    
});

</script>
	<script >

        $("#formSocio").submit(function (ev) {
            ev.preventDefault();
	//$("#mensajeDeAlerta").html("");

	$.ajax({
		url: "<?= base_url('validarFormularioSocio');?>",
		type: "post",
		data: $(this).serialize(),
		success: function (err) {
			var json = JSON.parse(err);
			console.log(json);
			//alert(json.url);
			//window.location.replace(json.url);
		},
        
		statusCode: {
			400: function (xhr) {
                var respuesta=xhr.responseText;
				var json = JSON.parse(respuesta);

				$("input").removeClass("is-invalid");
				//$("#form_group_contrasena > input").removeClass("is-invalid");

				console.log(json);
				if(json.formSocio_rut){
                    if (json.formSocio_rut.length != 0) {
					    $("#form_group_formSocio_rut > div").html(json.formSocio_rut);
					    $("#form_group_formSocio_rut > input").addClass("is-invalid");
				    }
                }
				

                if(json.formSocio_nombres){
                    if (json.formSocio_nombres.length != 0) {
					    $("#form_group_formSocio_nombres > div").html(json.formSocio_nombres);
					    $("#form_group_formSocio_nombres > input").addClass("is-invalid");
				    }
                }
                
                if(json.formSocio_apellidos){
                   if (json.formSocio_apellidos.length != 0) {
					    $("#form_group_formSocio_apellidos > div").html(json.formSocio_apellidos);
					    $("#form_group_formSocio_apellidos > input").addClass("is-invalid");
				    } 
                }
                

                if(json.formSocio_nacionalidad){
                    if (json.formSocio_nacionalidad.length != 0) {
					    $("#form_group_formSocio_nacionalidad > div").html(json.formSocio_nacionalidad);
    					$("#form_group_formSocio_nacionalidad > input").addClass("is-invalid");
				    }

                }
                
                if(json.formSocio_edad){
                    if (json.formSocio_edad.length != 0) {
					    $("#form_group_formSocio_edad > div").html(json.formSocio_edad);
					    $("#form_group_formSocio_edad > input").addClass("is-invalid");
				    }
                }
                
                if(json.formSocio_genero){
                    if (json.formSocio_genero.length != 0) {
					    $("#form_group_formSocio_genero > div").html(json.formSocio_genero);
					    $("#form_group_formSocio_genero > label > input").addClass("is-invalid");
				    }
                }
                
                if(json.formSocio_carreraActual){
                    if (json.formSocio_carreraActual.length != 0) {
					    $("#form_group_formSocio_carreraActual > div").html(json.formSocio_carreraActual);
					    $("#form_group_formSocio_carreraActual > label > input").addClass("is-invalid");
				    }
                }

                if(json.formSocio_carreraPrimeraOpcionSiNo){
                   if (json.formSocio_carreraPrimeraOpcionSiNo.length != 0) {
					    $("#radioCarreraPrimeraOpcion").html(json.formSocio_carreraPrimeraOpcionSiNo).show();
					    $("#form_group_formSocio_carreraPrimeraOpcionSiNo > div > label > input").addClass("is-invalid");
                        
                    } 
                }
                
                /** campo de texto que aparece opcionalmente */
                if(json.formSocio_carreraPrimeraOpcion){
                    if (json.formSocio_carreraPrimeraOpcion.length != 0) {
					    $("#form_group_formSocio_carreraPrimeraOpcion > div").html(json.formSocio_carreraPrimeraOpcion);
					    $("#form_group_formSocio_carreraPrimeraOpcion > input").addClass("is-invalid");
					    $("#radioCarreraPrimeraOpcion").hide();

				    }
                }

                if(json.formSocio_convivencia){
                    if (json.formSocio_convivencia.length != 0) {
					    $("#form_group_formSocio_convivencia > div").html(json.formSocio_convivencia);
					    $("#form_group_formSocio_convivencia > label > input").addClass("is-invalid");
				    }
                }

                /*if(json.formSocio_trayecto){
                    if (json.formSocio_trayecto.length != 0) {
					    $("#form_group_formSocio_trayecto > div").html(json.formSocio_trayecto);
					    $("#form_group_formSocio_trayecto > label > input").addClass("is-invalid");
				    }
                }
                */
               
               
                
                if(json.formSocio_carreraDePrecedenciaSiNo){
                    if (json.formSocio_carreraDePrecedenciaSiNo.length != 0) {
					    $("#radiocarreraDePrecedenciaSiNo").html(json.formSocio_carreraDePrecedenciaSiNo).show();
					    $("#form_group_formSocio_carreraDePrecedenciaSiNo > div > label > input").addClass("is-invalid");
				    }
                }

                if(json.formSocio_carreraDePrecedenciaIngresar){
                    if (json.formSocio_carreraDePrecedenciaIngresar.length != 0) {
					    $("#radiocarreraDePrecedenciaTexto").html(json.formSocio_carreraDePrecedenciaIngresar);
					    $("#formSocio_carreraDePrecedenciaIngresar").addClass("is-invalid");
				    }
                }

                let radioRazonElegitCarreraActual=json.formSocio_razonParaElegirLaCarreraActual;
                
                if(radioRazonElegitCarreraActual){
                    if (radioRazonElegitCarreraActual.length != 0) {
					    $("#radioRazonParaElegirLaCarreraActual").html(radioRazonElegitCarreraActual).show();
					    $("#form_group_formSocio_razonParaElegirLaCarreraActual >label >input").addClass("is-invalid");
				    }
                }

                let textoRazonElegirCarrera=json.formSocio_razonParaElegirLaCarreraActualIngresarMotivo;
                
                if(textoRazonElegirCarrera){
                    if (textoRazonElegirCarrera.length != 0) {
					    $("#razonParaElegirLaCarreraActualOtroMotivo").html(textoRazonElegirCarrera);
					    $("#formSocio_razonParaElegirLaCarreraActualMotivo").addClass("is-invalid");
				    }
                }

                let condicionMentalSiNoNose=json.formSocio_condicionMentalDiagnosticadaSiNoNose;
                
                if(condicionMentalSiNoNose){
                    if (condicionMentalSiNoNose.length != 0) {
					    $("#radioCondicionMentalSiNoNose").html(condicionMentalSiNoNose).show();
					    $("#form_group_formSocio_condicionMentalDiagnosticadaSiNoNose > div > label > input").addClass("is-invalid");
				    }
                }

                let condicionMentalNombre=json.formSocio_nombreDeCondicionMentalDiagnosticada;
                
                if(condicionMentalNombre){
                    if (condicionMentalNombre.length != 0) {
					    $("#form_group_formSocio_nombreDeCondicionMentalDiagnosticada > div").html(condicionMentalNombre);
					    $("#form_group_formSocio_nombreDeCondicionMentalDiagnosticada > input").addClass("is-invalid");
				    }
                }

                let beneficioGratuidad=json.formSocio_beneficioGratuidadSiNo;
                
                if(beneficioGratuidad){
                    if (beneficioGratuidad.length != 0) {
					    $("#radioBeneficioDeGratuidad").html(beneficioGratuidad).show();
					    $("#form_group_formSocio_beneficioGratuidadSiNo >div>label > input").addClass("is-invalid");
				    }
                }
			},

		},

	});
	
});

    </script>

</body>
</html>


