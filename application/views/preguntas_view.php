




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php $this->load->view("componentes/Bootstrap_view");?>

        <?php $this->load->view("componentes/jQuery_view");?>
        
    <title>Document</title>
</head>

<body style="background-color:#F0F0F0">
    
    <div class="container border border-3 border-gray bg-light">
<h1>Cuestionario de Motivacion y Estrategias de estudio</h1>
        
        <h4>En esta sección deberá responder todas las preguntas eligiendo la opción que este más acertada. Los valores a elegir van de 1 (Totalmente en desacuerdo) y 7 (Totalmente de acuerdo) </h4>

        <br />
        <hr />

<form	id="cuestionario_MSLQ"
		        method="post" 
        		autocomplete="off" 
		        action="<?=base_url('validarCuestionarioMSLQ')?>">

<div class="container mt-3 ">



<?php
    $indicePregunta=1;
    $indicePreguntaRadio=1;
    ?>


    <?php foreach ($dimensiones as $dimension):?>


    <p class="h3"><?= $dimension->nombreDimension;?></p>

    <?php foreach ($preguntas as $pregunta):?>

        <?php if($dimension->idDimension == $pregunta->idDimension):?>

        <section class="row ">

            <div class="col-md-12 ">

                <section class="row ">

                    <div class="col-md-7">

                        <p  id="pregunta_<?= $indicePregunta ?>"
					        class="h5 ">
                            
                            <?= $indicePregunta ?>.- <?= $pregunta->pregunta ?> 
                        </p>
                        <div class="invalid-feedback"></div>
                    
                    </div>

                    <div	class="col-md-5 form-group"
					        id="form_group_<?=$indicePregunta?>">
            <!--opciones 1 a 7 Likert-->

            <?php   $indiceLikert=1;
                    
                    while($indiceLikert<=7):?>


    

                        <section class="form-check form-check-inline">

                    <?php $identificarPregunta = "pregunta_".$indicePregunta;
                    $identificarRadio = $identificarPregunta."_radio_".$indiceLikert;?>
					
                            <input  class=" h6 form-check-input "
                                    type="radio" 
								    name="<?= $identificarPregunta ?>"
                                    id="<?=$identificarRadio?>" 
                                    value="<?=$indiceLikert?>">


                                    <label  class=" h5 form-check-label "
                                            for="<?=$identificarRadio?>">
                            
                            <?=$indiceLikert?>
                                    </label>
                        </section>

                        

            <?php $indiceLikert++; $indicePreguntaRadio++; endwhile;?>

                    </div>
                </section>
            
            </div>


        </section>
            
<br >
<hr >
        <?php $indicePregunta++;endif;?>

        <?php endforeach;?><?php endforeach;?>
</div>


<?php form_error();?>
<!--BOTON ENVIAR FORMULARIO-->
<section class="row">
    <div class="col-md-9  aling-items-right  ">
        <button type="submit" class="btn btn-primary">Enviar formulario</button>
    </div>
</section>
</form>           
           


<script>


$("#cuestionario_MSLQ").submit(function (ev) {


	//$("#mensajeDeAlerta").html("");
	
	$.ajax({
		url: " <?= base_url('validarCuestionarioMSLQ');?>",
		type: "post",

		data: $(this).serialize(),
		success: function (erroresDeValidacion) {
			var json = JSON.parse(erroresDeValidacion);
			console.log(json);
			//alert(json.url);
			//window.location.replace(json.url);
		},

        statusCode:{


            400:function(xhr){

                
            }
        }

		
	});
	ev.preventDefault();
});
</script>


    
</body>
</html>

