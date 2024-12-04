




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
    
    <form action="<?=base_url('FormularioSocio')?>" method="post">
        <button type="submit">Volver atrás</button>
    </form>

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

    $idPreguntaJS;
    ?>

    <?php foreach ($dimensiones as $dimension): ?>
        <p class="h3"><?= $dimension->nombreDimension; ?></p>

        <?php foreach ($preguntas as $pregunta): ?>
            <?php if ($dimension->idDimension == $pregunta->idDimension): ?>
                <section class="row">
                    <div class="col-md-12">
                        <section class="row">
                            <div class="col-md-7">
                                <p id="pregunta_<?= $indicePregunta ?>" class="h5">
                                    <?= $indicePregunta ?>.- <?= $pregunta->pregunta ?> (<?= $pregunta->idPregunta ?>)
                                </p>
                            </div>

                            <div class="col-md-5 form-group" id="form_group_<?= "pregunta_" . $pregunta->idPregunta ?>">
                                <?php $idPreguntaJS[] = "pregunta_" . $pregunta->idPregunta; ?>

                                <!-- Opciones 1 a 7 Likert -->
                                <?php for ($indiceLikert = 1; $indiceLikert <= 7; $indiceLikert++): ?>
                                    <?php 
                                        $identificarPregunta = "pregunta_" . $pregunta->idPregunta;
                                        $identificarRadio = $identificarPregunta . "_radio_" . $indiceLikert;
                                    ?>
                                    <section class="form-check form-check-inline">
                                        <input class="h6 form-check-input"
                                            type="radio" 
                                            id="<?= $identificarRadio ?>" 
                                            value="<?= $indiceLikert ?>"
                                            name="<?= $identificarPregunta ?>">
                                        <label class="h5 form-check-label" for="<?= $identificarRadio ?>">
                                            <?= $indiceLikert ?>
                                        </label>
                                    </section>
                                <?php endfor; ?>
                            </div>

                            <div id="div_pregunta_<?= $pregunta->idPregunta ?>" class="invalid-feedback"></div>
                        </section>
                    </div>
                </section>
                <br>
                <hr>
                <?php $indicePregunta++; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>

    
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

    ev.preventDefault();

    let datos_del_formulario = {
        pregunta_1: $('input[name="pregunta_2"]:checked').val(),
        pregunta_2: $('input[name="pregunta_6"]:checked').val(),
        pregunta_3: $('input[name="pregunta_8"]:checked').val(),
        pregunta_4: $('input[name="pregunta_9"]:checked').val(),
        pregunta_5: $('input[name="pregunta_11"]:checked').val(),
        pregunta_6: $('input[name="pregunta_13"]:checked').val(),
        pregunta_7: $('input[name="pregunta_16"]:checked').val(),
        pregunta_8: $('input[name="pregunta_18"]:checked').val(),
        pregunta_9: $('input[name="pregunta_19"]:checked').val(),
        pregunta_10: $('input[name="pregunta_1"]:checked').val(),
        pregunta_11: $('input[name="pregunta_4"]:checked').val(),
        pregunta_12: $('input[name="pregunta_5"]:checked').val(),
        pregunta_13: $('input[name="pregunta_7"]:checked').val(),
        pregunta_14: $('input[name="pregunta_10"]:checked').val(),
        pregunta_15: $('input[name="pregunta_14"]:checked').val(),
        pregunta_16: $('input[name="pregunta_15"]:checked').val(),
        pregunta_17: $('input[name="pregunta_17"]:checked').val(),
        pregunta_18: $('input[name="pregunta_21"]:checked').val(),
        pregunta_19: $('input[name="pregunta_3"]:checked').val(),
        pregunta_20: $('input[name="pregunta_12"]:checked').val(),
        pregunta_21: $('input[name="pregunta_20"]:checked').val(),
        pregunta_22: $('input[name="pregunta_22"]:checked').val(),
        pregunta_23: $('input[name="pregunta_23"]:checked').val(),
        pregunta_24: $('input[name="pregunta_24"]:checked').val(),
        pregunta_25: $('input[name="pregunta_26"]:checked').val(),
        pregunta_26: $('input[name="pregunta_28"]:checked').val(),
        pregunta_27: $('input[name="pregunta_29"]:checked').val(),
        pregunta_28: $('input[name="pregunta_30"]:checked').val(),
        pregunta_29: $('input[name="pregunta_31"]:checked').val(),
        pregunta_30: $('input[name="pregunta_34"]:checked').val(),
        pregunta_31: $('input[name="pregunta_36"]:checked').val(),
        pregunta_32: $('input[name="pregunta_39"]:checked').val(),
        pregunta_33: $('input[name="pregunta_41"]:checked').val(),
        pregunta_34: $('input[name="pregunta_42"]:checked').val(),
        pregunta_35: $('input[name="pregunta_44"]:checked').val(),
        pregunta_36: $('input[name="pregunta_25"]:checked').val(),
        pregunta_37: $('input[name="pregunta_27"]:checked').val(),
        pregunta_38: $('input[name="pregunta_32"]:checked').val(),
        pregunta_39: $('input[name="pregunta_33"]:checked').val(),
        pregunta_40: $('input[name="pregunta_35"]:checked').val(),
        pregunta_41: $('input[name="pregunta_37"]:checked').val(),
        pregunta_42: $('input[name="pregunta_38"]:checked').val(),
        pregunta_43: $('input[name="pregunta_40"]:checked').val(),
        pregunta_44: $('input[name="pregunta_43"]:checked').val(),
    
    };

    let jsonData = JSON.stringify(datos_del_formulario);
	
	$.ajax({
		url: "<?= base_url('registrarRespuestaCuestionarioMSLQ');?>",
		type: "POST",
        contentType: "application/json", // Indica que envías JSON
        data: jsonData, // Enviar JSON
        success: function (response) {
            //alert("Respuestas de formulario registradas correctamente");
            alert(response);
            //document.getElementById("boton_siguiente_formulario").disabled = false;
        },

        error: function (xhr, status, error) {
            console.error("Error:", error);
            alert("Ocurrió un error al procesar la solicitud.");
        }
	});
	
});
</script>


    
</body>
</html>

