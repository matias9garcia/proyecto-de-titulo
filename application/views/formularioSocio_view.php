<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
        <?php $this->load->view("componentes/Bootstrap_view");?>

        <?php $this->load->view("componentes/jQuery_view");?>

    <title>Document</title>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link href="<?=base_url('assets/bootstrap.min.css')?>"
      rel="stylesheet">

    <title>Encuesta de Estrategias Motivacionales y de Aprendizaje</title>
</head>


<body style="background-color:#F0F0F0">

<div class="container border border-3 border-gray bg-light">
	
    <h1>Formulario Sociodemografico:</h1>
    <p>A continuación deberá ingresar su información personal</p>
    <hr>


    <form   id="formularioSociodemografico" 
            action="<?=base_url('formularioRespuesta')?>" 
            method="POST">



    <!--Ingresar Rut-->
    <section class="row">


        <div    class="col-md-4 form-group"
                id="form_group_formularioSociodemografico_rut">
            <label  for = "formularioSociodemografico_rut" 
                    class = "form-label"  >
                *RUT:
            </label>


            <input  type = "text"
                    class = "form-control " 
                    id = "formularioSociodemografico_rut" 
                    placeholder = "Ingresar RUT en formato 12345678-9" 
                    name = "formularioSociodemografico_rut" >
    
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->

        </div>
    </section>

<br><br>

    <section class="row">

    <!--Ingresar Nombre-->
        <div    class="col-md-6 form-group"
                id="form_group_formularioSociodemografico_nombres">
        
                <label  for = "formularioSociodemografico_nombres"
                        class = "form-label">
                    *Nombres:
                </label>
                <input  type = "text" 
                        class = "form-control" 
                        id = "formularioSociodemografico_nombres" 
                        placeholder = "Ingresar Nombre" 
                        name = "formularioSociodemografico_nombres" >
            
                <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>

<!--Ingresar Apellidos-->

        <div    class="col-md-6 form-group "
                id="form_group_formularioSociodemografico_apellidos">
            
            <label  for = "formularioSociodemografico_apellidos" 
                    class = "form-label">
                *Apellidos:
            </label>
            <input  type = "text" 
                    class = "form-control" 
                    id = "formularioSociodemografico_apellidos" 
                    placeholder="Ingresar Apellidos" 
                    name="formularioSociodemografico_apellidos" >

            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        
        </div>



        
    </section>

<!--Fin Ingresar Apellidos-->

<br><br><br>
    
    <section class="row form-group">

        
    
        <div class="col-md-4 ">
            <div    class=" form-group"
                    id = "form_group_formularioSociodemografico_nacionalidad">
                <label  for = "formularioSociodemografico_nacionalidad">
                    * Nacionalidad:
                </label>
                <input  type = "text" 
                        class = "form-control"
                        id = "formularioSociodemografico_nacionalidad" 
                        placeholder = "Ingresar Nacionalidad" 
                        name = "formularioSociodemografico_nacionalidad" >

                <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
            </div>
        </div>
    
        <div    class="col-md-4 form-group"
                id = "form_group_formularioSociodemografico_edad">
        
            <label for="formularioSociodemografico_edad">
                * Edad:
            </label>
            <input  type="text" class="form-control" 
                    id="formularioSociodemografico_edad" 
                    placeholder="Ingresar Edad" 
                    name="formularioSociodemografico_edad" >
        
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
    
        </div>

    </section>

<br><br><br>

    <section class="row">
        
        <div class="col-md-4 form-group"
            id = "form_group_formularioSociodemografico_genero">

            <p id="formularioSociodemografico_genero">
                * Género:
            </p>

            <label  for="formularioSociodemografico_generoFemenino">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_genero" 
                        id="formularioSociodemografico_generoFemenino"
                        value="femenino" >
                        Femenino
            </label>
        <br>
        
            <label  for="formularioSociodemografico_generoMasculino">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_genero" 
                        id="formularioSociodemografico_generoMasculino"
                        value="masculino" >
                        Masculino
            </label>
        <br>
           
            <label  for="formularioSociodemografico_generoNoResonder">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_genero" 
                        id="formularioSociodemografico_generoNoResonder"
                        value=">noResonder" >
                        Prefiero no responder
            </label>

<!--mensaje de error LLENAR CAMPO-->
            <div  class="invalid-feedback"></div>
        
        </div>
        
    </section>
    <br>
    <br>
    <br>
    <section class="row">
        <div class="col-md-4 form-group"
            id="form_group_formularioSociodemografico_carreraActual">

            <p id="formularioSociodemografico_carreraActual">
                * Seleccionar su carrera actual:
            </p>
            
            <label   for="formularioSociodemografico_carreraActualCivil">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_carreraActual" 
                        id="formularioSociodemografico_carreraActualCivil"
                        value="ingCivilInf" >
                        Ingeniería Civil en Informática
            </label>
            <br>
            
            <label  for="formularioSociodemografico_carreraActualInf">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_carreraActual" 
                        id="formularioSociodemografico_carreraActualInf"
                        value="ingInf" >
                        Ingeniería en Informática
            </label>
            <br>
            
            <label  for="formularioSociodemografico_carreraActualCivilCiencia">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_carreraActual" 
                        id="formularioSociodemografico_carreraActualCivilCiencia"
                        value="ingCivilCiencia" >
                        Ingeniería Civil en Ciencia de Datos
            </label>
        
        
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>

    </section>


<br><br><br>

    <section class="row">
        <div class="col-md-8 form-group"
            id="form_group_formularioSociodemografico_carreraPrimeraOpcionSiNo">
        
        <p id="formularioSociodemografico_carreraPrimeraOpcionSiNo">
            * ¿La carrera a la cual te has inscrito fue tu primera opción?:
        </p>

            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formularioSociodemografico_carreraPrimeraOpcionSi">
                    <input  class="form-check-input"
                            type="radio"
                            name="formularioSociodemografico_carreraPrimeraOpcionSiNo" 
                            id="formularioSociodemografico_carreraPrimeraOpcionSi" 
                            value="Si" >
                        Si
                </label>

            </div>
            
            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formularioSociodemografico_carreraPrimeraOpcionNo">
                    <input  class="form-check-input"
                            type="radio"
                            name="formularioSociodemografico_carreraPrimeraOpcionSiNo" 
                            id="formularioSociodemografico_carreraPrimeraOpcionNo" 
                            value="No" >
                        No
                </label>

            </div>
            
            <div id="radioCarreraPrimeraOpcion" class="invalid-feedback"></div><!--mensaje de error RESPONDER RADIO-->



            <div    class="col-md-4 form-group" 
                    id="form_group_formularioSociodemografico_carreraPrimeraOpcion">

                <label  for="formularioSociodemografico_carreraPrimeraOpcionIngresar">
                        * Ingrese la primera carrera que eligió:
                </label>
                <input  type="text"
                        class="form-control "
                        id="formularioSociodemografico_carreraPrimeraOpcionIngresar" 
                        name = formularioSociodemografico_carreraPrimeraOpcion >
                <div class="invalid-feedback"></div>
            </div>

            <!--mensaje de error LLENAR CAMPO-->
        </div>
    </section>

<br><br><br>


    <section class="row">
        
        <div class="col-md-4 "
            id="form_group_formularioSociodemografico_convivencia">

            <p id="formularioSociodemografico_convivencia">
                * ¿Con quién vive?
            </p>
            
            <label   for="formularioSociodemografico_convivenciaFamilia">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_convivencia" 
                        id="formularioSociodemografico_convivenciaFamilia"
                        value="familia" >
                        Con mi familia
            </label>
            <br>

            <label  for="formularioSociodemografico_convivenciaPension">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_convivencia" 
                        id="formularioSociodemografico_convivenciaPension"
                        value="pension" >
                        Pensión
            </label>
            <br>
            
            <label  for="formularioSociodemografico_convivenciaPareja">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_convivencia" 
                        id="formularioSociodemografico_convivenciaPareja"
                        value="pareja" >
                        Pareja
            </label>
            <br>
            
            <label  for="formularioSociodemografico_convivenciaSolo">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_convivencia" 
                        id="formularioSociodemografico_convivenciaSolo"
                        value="solo" >
                        Soltero(a)
            </label>
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>
        
       

        
    </section>

<br><br><br>
        
    <section class = "row">
        <div class = "col-md-6 form-group"
                id="form_group_formularioSociodemografico_tiempoDeTraslado">
            <p  id = "formularioSociodemografico_tiempoDeTraslado">
                Normalmente, ¿Cuánto tarda en llegar a la Escuela de Ingeniería Informática?
            </p>
        

        <label   for="formularioSociodemografico_tiempoDeTrasladoMenosDe30">
            <input  class="form-check-input"
                    type="radio" 
                    name="formularioSociodemografico_tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoMenosDe30"
                    value="<30" >
                    Menos de 30 minutos
        </label>
        <br>

        <label  for="formularioSociodemografico_tiempoDeTrasladoIgual30">
            <input  class="form-check-input"
                    type="radio" 
                    name="formularioSociodemografico_tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoIgual30"
                    value="=30" >
                    30 minutos
        </label>
        <br>
        
        <label  for="formularioSociodemografico_tiempoDeTrasladoMasDe30">
            <input  class="form-check-input"
                    type="radio" 
                    name="formularioSociodemografico_tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoMasDe30"
                    value=">30" >
                    Más de 30 minutos
        </label>
        <br>
           
        <label  for="formularioSociodemografico_tiempoDeTrasladoMasDeUnaHora">
            <input  class="form-check-input"
                    type="radio" 
                    name="formularioSociodemografico_tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoMasDeUnaHora"
                    value=">60" >
                    Más de una hora
        </label>
        
        <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
</div>
    </section>

<br><br><br>
      
        
    <section class="row">
        <div    class="col-md-4 form-group"
                id="form_group_formularioSociodemografico_carreraDePrecedenciaSiNo"><!--form-control-->
            
            <p id="formularioSociodemografico_carreraDePrecedenciaSiNo">
                *¿Provienes de otra carrera? 
            </p>

                <div class="form-check form-check-inline">

                    <label  class="form-check-label"
                            for="formularioSociodemografico_carreraDePrecedenciaSi">

                        <input  id="formularioSociodemografico_carreraDePrecedenciaSi"
                                class="form-check-input"
                                type="radio" 
                                name="formularioSociodemografico_carreraDePrecedenciaSiNo" 
                                value="Si" >
                                Si
                    </label>
                </div>
            
                <div class="form-check form-check-inline">
                    
                    <label  class="form-check-label"
                            for="formularioSociodemografico_carreraDePrecedenciaNo">

                        <input  id="formularioSociodemografico_carreraDePrecedenciaNo"
                                class="form-check-input"
                                type="radio"
                                name="formularioSociodemografico_carreraDePrecedenciaSiNo" 
                                value="No" >
                                No
                    </label>

                </div>

                <div id="radiocarreraDePrecedenciaSiNo" class="invalid-feedback"></div>
        </div>

        <div    class="col-md-4 form-group"
                id ="form_group_formularioSociodemografico_carreraDePrecedenciaIngresar">
            <label for="formularioSociodemografico_carreraDePrecedenciaIngresar">
                * Ingresa la carrera de la que provienes:
            </label>
            <input  type="text" 
                    class="form-control" 
                    id="formularioSociodemografico_carreraDePrecedenciaIngresar" 
                    name = "formularioSociodemografico_carreraDePrecedenciaIngresar"
                    >
            <div id="radiocarreraDePrecedenciaTexto" class="invalid-feedback"></div>
        </div>       
    </section>

<br><br><br>

    <section class="row">
        <div    class="col-md-4 form-group"
                id="form_group_formularioSociodemografico_razonParaElegirLaCarreraActual">
            <p id="formularioSociodemografico_razonParaElegirLaCarreraActual">
                ¿Cómo y por qué eligió la carrera que cursa?
            </p>

            <label   for="formularioSociodemografico_razonParaElegirLaCarreraActualEleccionLibre">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualEleccionLibre"
                        value="eleccionLibre"
                        >
                        Fue elección libre
            </label>
        <br>

            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualPrimeraPreferencia">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualPrimeraPreferencia"
                        value="primeraPreferencia"
                        >
                        Fue primera preferencia
            </label>
        <br>
        
            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualTradicionFamiliar">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualTradicionFamiliar"
                        value="tradicionFamiliar"
                        >
                        Es una tradición familiar
            </label>
        <br>
           
            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualDescarte">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualDescarte"
                        value="descarte"
                        >
                        Por descarte
            </label>
        <br>
            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualOtroMotivo">
                <input  class="form-check-input"
                        type="radio" 
                        name="formularioSociodemografico_razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualOtroMotivo"
                        value="otroMotivo"
                        >
                        Otro motivo:
                        
                        
            </label>
            <div id="radioRazonParaElegirLaCarreraActual" class="invalid-feedback"></div>
            
            <br>
            <br>
            <div >
                <input  type="text"
                    class="form-control" 
                    id="formularioSociodemografico_razonParaElegirLaCarreraActualMotivo"
                    name = "formularioSociodemografico_razonParaElegirLaCarreraActualIngresarMotivo"
                    placeholder="Ingresar el/los motivo(s) de su elección"
                    >
                <div id="razonParaElegirLaCarreraActualOtroMotivo" class="invalid-feedback"></div>
            
            </div>
            

        </div>
    

    </section>

<br><br><br>

    <section class="row">
        <div class="col-md-5 form-group"
                id="form_group_formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose">
            <p id="formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose">
                ¿Tiene algún tipo de condicion mental diagnosticada? 
            </p>

            <div class="col-md-2 ">
                <label  for="formularioSociodemografico_condicionMentalDiagnosticadaSi">
                    <input  class="form-check-input radio" 
                            type="radio" 
                            id="formularioSociodemografico_condicionMentalDiagnosticadaSi" 
                            value="Si"
                            name="formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose"                 
                            >
                            Si
                </label>
            </div>
      
            <div class="col-md-2">
                <label  for="formularioSociodemografico_condicionMentalDiagnosticadaNo">
                    <input  class="form-check-input radio"
                            type="radio" 
                            id="formularioSociodemografico_condicionMentalDiagnosticadaNo" 
                            value="No"
                            name="formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose" 
                            >
                            No
                </label>
            </div>
      
            <div class="col-md-5">
                <label for="formularioSociodemografico_condicionMentalDiagnosticadaNoSe">
                    <input  class="form-check-input radio" 
                            type="radio" 
                            name="formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose" 
                            id="formularioSociodemografico_condicionMentalDiagnosticadaNoSe" 
                            value="Nose"
                            >
                        No estoy seguro
                </label>
                
                
            </div>
                <div id="radioCondicionMentalSiNoNose" class="invalid-feedback"></div>

        </div>
        
        <div    class="col-md-6 form-group" 
                id="form_group_formularioSociodemografico_nombreDeCondicionMentalDiagnosticada">
        
            <label  for = "formularioSociodemografico_nombreDeCondicionMentalDiagnosticada"
                    class = "form-label" >
                *¿Cuál es su condición?
            </label>

            <input  type="text"
                    class="form-control" 
                    id="formularioSociodemografico_nombreDeCondicionMentalDiagnosticada"
                    name = "formularioSociodemografico_nombreDeCondicionMentalDiagnosticada"
                    >
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        
        </div>
    </section>        
               
<br><br><br><br>


    <section class="row">
        <div class="col-md-6 form-group"
                id="form_group_formularioSociodemografico_beneficioGratuidadSiNo">
            <p id="formularioSociodemografico_beneficioGratuidad">
                ¿Tiene beneficio de gratuidad?
            </p>

            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formularioSociodemografico_beneficioGratuidadSi">
                            <input  class="form-check-input" 
                            type="radio"
                            name="formularioSociodemografico_beneficioGratuidadSiNo" 
                            id="formularioSociodemografico_beneficioGratuidadSi" 
                            value="Si"
                            >
                            Si
                </label>
            </div>
        
            <div class="form-check form-check-inline">
                
                <label class="form-check-label" for="formularioSociodemografico_beneficioGratuidadNo">
                    <input  class="form-check-input"
                            type="radio" 
                            name="formularioSociodemografico_beneficioGratuidadSiNo" 
                            id="formularioSociodemografico_beneficioGratuidadNo"
                            value="No"
                            >
                            No
                </label>
            </div>
        <div id="radioBeneficioDeGratuidad"class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>
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
    
    //$("input").prop("required", true);
/* ¿Tiene algún tipo de condicion mental diagnosticada? */


    $(" #opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").hide();
    
    $(" #formularioSociodemografico_condicionMentalDiagnosticadaSi ").click(function(){
        $(" #opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").show();
    }); 
    
    $(" #formularioSociodemografico_condicionMentalDiagnosticadaNo").click(function(){
        $(" #opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").hide();
    });
    
    $(" #formularioSociodemografico_condicionMentalDiagnosticadaNoSe ").click(function(){
        $( "#opcionalCualEsSucondicion > label , #opcionalCualEsSucondicion > input ").hide();
    }); 

/** ¿La carrera a la cual te has inscrito fue tu primera opción?: */
    $(" #formularioSociodemografico_carreraPrimeraOpcion > label , #formularioSociodemografico_carreraPrimeraOpcion > input ").hide();
    /**SI */
    $(" #formularioSociodemografico_carreraPrimeraOpcionSi ").click(function(){
        $(" #formularioSociodemografico_carreraPrimeraOpcion > label , #formularioSociodemografico_carreraPrimeraOpcion > input ").hide();
    });
    /**NO */
    $(" #formularioSociodemografico_carreraPrimeraOpcionNo ").click(function(){
        $(" #formularioSociodemografico_carreraPrimeraOpcion > label , #formularioSociodemografico_carreraPrimeraOpcion > input ").show();
    });
    


/*¿Provienes de otra carrera?*/ 
    $(" #formularioSociodemografico_carreraDePrecedencia > label , #formularioSociodemografico_carreraDePrecedencia > input ").hide();
    
    $(" #formularioSociodemografico_carreraDePrecedenciaSi ").click(function(){
        $(" #formularioSociodemografico_carreraDePrecedencia > label , #formularioSociodemografico_carreraDePrecedencia > input ").show();
    });
      $(" #formularioSociodemografico_carreraDePrecedenciaNo ").click(function(){
        $(" #formularioSociodemografico_carreraDePrecedencia > label , #formularioSociodemografico_carreraDePrecedencia > input ").hide();
    });
});

</script>
	<script >

        $("#formularioSociodemografico").submit(function (ev) {
	//$("#mensajeDeAlerta").html("");

	$.ajax({
		url: "<?= base_url('formularioRespuesta');?>",
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
				if(json.formularioSociodemografico_rut){
                    if (json.formularioSociodemografico_rut.length != 0) {
					    $("#form_group_formularioSociodemografico_rut > div").html(json.formularioSociodemografico_rut);
					    $("#form_group_formularioSociodemografico_rut > input").addClass("is-invalid");
				    }
                }
				

                if(json.formularioSociodemografico_nombres){
                    if (json.formularioSociodemografico_nombres.length != 0) {
					    $("#form_group_formularioSociodemografico_nombres > div").html(json.formularioSociodemografico_nombres);
					    $("#form_group_formularioSociodemografico_nombres > input").addClass("is-invalid");
				    }
                }
                
                if(json.formularioSociodemografico_apellidos){
                   if (json.formularioSociodemografico_apellidos.length != 0) {
					    $("#form_group_formularioSociodemografico_apellidos > div").html(json.formularioSociodemografico_apellidos);
					    $("#form_group_formularioSociodemografico_apellidos > input").addClass("is-invalid");
				    } 
                }
                

                if(json.formularioSociodemografico_nacionalidad){
                    if (json.formularioSociodemografico_nacionalidad.length != 0) {
					    $("#form_group_formularioSociodemografico_nacionalidad > div").html(json.formularioSociodemografico_nacionalidad);
    					$("#form_group_formularioSociodemografico_nacionalidad > input").addClass("is-invalid");
				    }

                }
                
                if(json.formularioSociodemografico_edad){
                    if (json.formularioSociodemografico_edad.length != 0) {
					    $("#form_group_formularioSociodemografico_edad > div").html(json.formularioSociodemografico_edad);
					    $("#form_group_formularioSociodemografico_edad > input").addClass("is-invalid");
				    }
                }
                
                if(json.formularioSociodemografico_genero){
                    if (json.formularioSociodemografico_genero.length != 0) {
					    $("#form_group_formularioSociodemografico_genero > div").html(json.formularioSociodemografico_genero);
					    $("#form_group_formularioSociodemografico_genero > label > input").addClass("is-invalid");
				    }
                }
                
                if(json.formularioSociodemografico_carreraActual){
                    if (json.formularioSociodemografico_carreraActual.length != 0) {
					    $("#form_group_formularioSociodemografico_carreraActual > div").html(json.formularioSociodemografico_carreraActual);
					    $("#form_group_formularioSociodemografico_carreraActual > label > input").addClass("is-invalid");
				    }
                }

                if(json.formularioSociodemografico_carreraPrimeraOpcionSiNo){
                   if (json.formularioSociodemografico_carreraPrimeraOpcionSiNo.length != 0) {
					    $("#radioCarreraPrimeraOpcion").html(json.formularioSociodemografico_carreraPrimeraOpcionSiNo);
					    $("#form_group_formularioSociodemografico_carreraPrimeraOpcionSiNo > div > label > input").addClass("is-invalid");
				    } 
                }
                
                /** campo de texto que aparece opcionalmente */
                if(json.formularioSociodemografico_carreraPrimeraOpcion){
                    if (json.formularioSociodemografico_carreraPrimeraOpcion.length != 0) {
					    $("#form_group_formularioSociodemografico_carreraPrimeraOpcion > div").html(json.formularioSociodemografico_carreraPrimeraOpcion);
					    $("#form_group_formularioSociodemografico_carreraPrimeraOpcion > input").addClass("is-invalid");
				    }
                }

                if(json.formularioSociodemografico_convivencia){
                    if (json.formularioSociodemografico_convivencia.length != 0) {
					    $("#form_group_formularioSociodemografico_convivencia > div").html(json.formularioSociodemografico_convivencia);
					    $("#form_group_formularioSociodemografico_convivencia > label > input").addClass("is-invalid");
				    }
                }

                if(json.formularioSociodemografico_tiempoDeTraslado){
                    if (json.formularioSociodemografico_tiempoDeTraslado.length != 0) {
					    $("#form_group_formularioSociodemografico_tiempoDeTraslado > div").html(json.formularioSociodemografico_tiempoDeTraslado);
					    $("#form_group_formularioSociodemografico_tiempoDeTraslado > label > input").addClass("is-invalid");
				    }
                }
                
                if(json.formularioSociodemografico_carreraDePrecedenciaSiNo){
                    if (json.formularioSociodemografico_carreraDePrecedenciaSiNo.length != 0) {
					    $("#radiocarreraDePrecedenciaSiNo").html(json.formularioSociodemografico_carreraDePrecedenciaSiNo);
					    $("#form_group_formularioSociodemografico_carreraDePrecedenciaSiNo > div > label > input").addClass("is-invalid");
				    }
                }

                if(json.formularioSociodemografico_carreraDePrecedenciaIngresar){
                    if (json.formularioSociodemografico_carreraDePrecedenciaIngresar.length != 0) {
					    $("#radiocarreraDePrecedenciaTexto").html(json.formularioSociodemografico_carreraDePrecedenciaIngresar);
					    $("#formularioSociodemografico_carreraDePrecedenciaIngresar").addClass("is-invalid");
				    }
                }

                let radioRazonElegitCarreraActual=json.formularioSociodemografico_razonParaElegirLaCarreraActual;
                
                if(radioRazonElegitCarreraActual){
                    if (radioRazonElegitCarreraActual.length != 0) {
					    $("#radioRazonParaElegirLaCarreraActual").html(radioRazonElegitCarreraActual);
					    $("#form_group_formularioSociodemografico_razonParaElegirLaCarreraActual >label >input").addClass("is-invalid");
				    }
                }

                let textoRazonElegirCarrera=json.formularioSociodemografico_razonParaElegirLaCarreraActualIngresarMotivo;
                
                if(textoRazonElegirCarrera){
                    if (textoRazonElegirCarrera.length != 0) {
					    $("#razonParaElegirLaCarreraActualOtroMotivo").html(textoRazonElegirCarrera);
					    $("#formularioSociodemografico_razonParaElegirLaCarreraActualMotivo").addClass("is-invalid");
				    }
                }

                let condicionMentalSiNoNose=json.formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose;
                
                if(condicionMentalSiNoNose){
                    if (condicionMentalSiNoNose.length != 0) {
					    $("#radioCondicionMentalSiNoNose").html(condicionMentalSiNoNose);
					    $("#form_group_formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose > div > label > input").addClass("is-invalid");
				    }
                }

                let condicionMentalNombre=json.formularioSociodemografico_nombreDeCondicionMentalDiagnosticada;
                
                if(condicionMentalNombre){
                    if (condicionMentalNombre.length != 0) {
					    $("#form_group_formularioSociodemografico_nombreDeCondicionMentalDiagnosticada > div").html(condicionMentalNombre);
					    $("#form_group_formularioSociodemografico_nombreDeCondicionMentalDiagnosticada > input").addClass("is-invalid");
				    }
                }

                let beneficioGratuidad=json.formularioSociodemografico_beneficioGratuidadSiNo;
                
                if(beneficioGratuidad){
                    if (beneficioGratuidad.length != 0) {
					    $("#radioBeneficioDeGratuidad").html(condicionMentalNombre);
					    $("#form_group_formularioSociodemografico_beneficioGratuidadSiNo >div>label > input").addClass("is-invalid");
				    }
                }

                
                
                


			},

		},

	});
	ev.preventDefault();
});

    </script>

</body>
</html>


<body>





</body>
</html>