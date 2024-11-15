<?php 
function getReglasDePrueba(){

    return  array(
        array(
                'field' => 'flexRadioDefault',
                'label' => 'radio_prueba',
                'rules' => 'regex_match[/s|n/]|required|trim',//
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    
                    'regex_match' => 'regex_match sino'
                )
        ),
         
    );

}


?>