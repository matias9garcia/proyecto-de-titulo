<?php

function crearValoresDeConsultaDeInsercion($respuestas,$cantidadDePreguntas){
    
    
    $textoValores="";
    $coma=",";

    $indice=1;



    foreach($respuestas as $respuesta){
/**se crea la cadena de texto para las columnas en las que se insertarán las respuestas  
 * 
 * 
 */
if($indice==$cantidadDePreguntas){
                $coma="";
            }

     $textoValores=$textoValores."('',".$indice.",".$respuesta.")".$coma;


        
            $indice++;
        }


        return "INSERT INTO respuestas_de_cuestionario (idCuestionario , idPregunta , respuesta) VALUES  ".$textoValores.";";

    }
?>

