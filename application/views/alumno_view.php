<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php $this->load->view("componentes/Bootstrap_view");?>
        
        <?php $this->load->view("componentes/jQuery_view");?>

    <title>Document</title>
</head>
<body>

<form action="Ejemplo_controller/eliminar" method="post">

    <input  id = "formSocio_rut" 
            type = "text"
            placeholder = "Ingresar RUT en formato 12345678-9" 
            name = "arreglo[]" ><br>

    <input  id = "formSocio_nombres" 
            type = "text"  
            placeholder = "Ingresar nombres" 
            name = "arreglo[]" ><br>

    <input  id = "formSocio_apellidos" 
            type = "text"  
            placeholder = "Ingresar apellidos" 
            name = "arreglo[]" ><br>

    <input  id = "formSocio_nacionalidad" 
            type = "text"  
            placeholder = "Ingresar nacionalidad" 
            name = "arreglo[]" ><br>

    <input  id = "formSocio_edad" 
            type = "text"  
            placeholder = "Ingresar edad" 
            name = "arreglo[]" ><br>
Género:
<select id="formSocio_genero" name="arreglo[]">

    <option value="NULL">Seleccione su género</option>
    <option value="femenino">Femenino</option>
    <option value="masculino">Masculino</option>
    <option value="nr">Prefiero no responder</option>


</select><br>

Seleccionar su carrera actual:
<select id="formSocio_carreraActual" name="arreglo[]">

    <option value="NULL">Seleccionar su carrera actual</option>
    <option value="ingCivilInf">Ingeniería Civil en Informática</option>
    <option value="ingInf">Ingeniería en Informática</option>
    <option value="ingCivilCiencia">Ingeniería Civil en Ciencia de Datos</option>

</select><br>


¿Con quién vive?:
<select id="formSocio_convivencia" name="arreglo[]">

    <option value="NULL">Seleccionar su convivencia</option>
    <option value="familia">Con mi familia</option>
    <option value="pension">Pensión</option>
    <option value="pareja">Pareja</option>
    <option value="solo">Soltero(a)</option>

</select><br>


Normalmente, ¿Cuánto tarda en llegar a la Escuela de Ingeniería Informática?:
<select id="formSocio_trayecto" name="arreglo[]">

    <option value="NULL">Seleccionar su tiempo de trayecto</option>
    <option value="menos30">Menos de 30 minutos</option>
    <option value="igual30">30 minutos</option>
    <option value="mas30">Más de 30 minutos</option>
    <option value="masHora">Más de una hora</option>

</select><br>




*¿Provienes de otra carrera? 

<div class="form-check form-check-inline">

                    <label  class="form-check-label"
                            for="formSocio_carreraDePrecedenciaSi">

                        <input  id="formSocio_carreraDePrecedenciaSi"
                                class="form-check-input"
                                type="radio" 
                                name="arreglo[]" 
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
                                name="arreglo[]" 
                                value="No" >
                                No
                    </label>

                </div>

                <div id="radiocarreraDePrecedenciaSiNo" class="invalid-feedback"></div>




            <div    class="col-md-4form-group"
                id ="form_group_formSocio_carreraDePrecedenciaIngresar">
            <label for="formSocio_carreraDePrecedenciaIngresar">
                * Ingresa la carrera de la que provienes:
            </label>

            <input  type="text" 
                    id="formSocio_carreraDePrecedenciaIngresar" 
                    name = "formSocio_carreraDePrecedenciaIngresar"
                    >
            <div id="radiocarreraDePrecedenciaTexto" class="success-feedback">aaa</div>invalid
        </div>


¿Cómo y por qué eligió la carrera que cursa?
<select id="formSocio_razonParaElegirLaCarreraActual" name="arreglo[]">

    <option id="formSocio_razonParaElegirLaCarreraActualNULL" value="NULL">Seleccionar su elección</option>
    <option id="formSocio_razonParaElegirLaCarreraActualEleccionLibre" value="eleccionLibre">Fue elección libre</option>
    <option id="formSocio_razonParaElegirLaCarreraActualPrimeraReferenca" value="primeraReferenca">Fue primera preferencia</option>
    <option id="formSocio_razonParaElegirLaCarreraActualTradicion" value="tradicion">Es una tradición familiar</option>
    <option id="formSocio_razonParaElegirLaCarreraActualDescarte" value="descarte">Por descarte</option>
    <option id="formSocio_razonParaElegirLaCarreraActualOtroMotivo" value="otroMotivo">Otro motivo</option>

</select><br>


<div    class="col-md-4form-group"
                id ="form_group_formSocio_razonParaElegirLaCarreraActualMotivo">
            <label for="formSocio_razonParaElegirLaCarreraActualMotivo">
                * Ingresar el/los motivo(s) de su elección:
            </label>
    <br>
            <textarea  type="text" 
                    id="formSocio_razonParaElegirLaCarreraActualMotivo" 
                    name = "arreglo[]"></textarea>
            <div id="radiocarreraDePrecedenciaTexto" class="success-feedback">aaa</div>invalid
        </div>


    <input type="text" name="arreglo[]">
    <input type="text" name="arreglo[]">
    <input type="text" name="arreglo[]">

    <input type="submit">

    
</form>

<script>
$(document).ready(function(){

  $("#formSocio_carreraDePrecedenciaNo").click(function(){
    $("#form_group_formSocio_carreraDePrecedenciaIngresar").hide();
  });
  $("#formSocio_carreraDePrecedenciaSi").click(function(){
    $("#form_group_formSocio_carreraDePrecedenciaIngresar").show();
  });




$("#formSocio_razonParaElegirLaCarreraActualOtroMotivo").click(function(){

    $("#form_group_formSocio_razonParaElegirLaCarreraActualMotivo").show();

  });

$("#formSocio_razonParaElegirLaCarreraActualNULL, #formSocio_razonParaElegirLaCarreraActualEleccionLibre,#formSocio_razonParaElegirLaCarreraActualPrimeraReferenca,#formSocio_razonParaElegirLaCarreraActualTradicion,#formSocio_razonParaElegirLaCarreraActualDescarte").click(function(){

    $("#form_group_formSocio_razonParaElegirLaCarreraActualMotivo").hide();

  });

});
</script>
    
</body>
</html>