<?php
function getReglasDeCuestionarioMSLQ($cantidadDePreguntas){

	/**crea un arreglo con las reglas de validacion para las 44 preguntas usando un bucle for  */
    //$reglas=array();
    /**en el html se envia un numero */
	/**en codeigniter se muestra un string */
    for( $indiceNumeroPregunta=1 ; $indiceNumeroPregunta <= $cantidadDePreguntas ; $indiceNumeroPregunta++ ){
        $reglas[$indiceNumeroPregunta-1] = array(
                                            'field' => 'pregunta_'.$indiceNumeroPregunta,//id del input html
                				            'label' => 'pregunta_'.$indiceNumeroPregunta,//

											//reglas que deberia tener el input || trim quita los espacios de inicio y fin
                				            'rules' => 'required|numeric|trim|exact_length[1]|regex_match[/^[1-7]$/]',
                				            'errors'=> array(
                    				            'required' 		=> 'La pregunta '.$indiceNumeroPregunta.' se debe responder.',
                    				            'exact_length' 	=> 'exact_length Formato no admitido',
                    				            'numeric' 		=> 'numeric Formato no admitido',
                    				            'regex_match' 	=> 'regex_match Formato no admitido',
                				                )
        				                    );
    	}
        return  $reglas;
    }
    
?>