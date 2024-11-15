<?php 
function getReglasDeLogin(){

    return  array(
        array(
                'field' => 'login_rut',
                'label' => 'rut',
                'rules' => 'regex_match[/^(\d{1,2}(?:[\.]?\d{3}){2}-[\dkK])$/]|required|trim',
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'regex_match'   => 'Debes ingresar un RUT.'
                    )
        ),
         array(
                'field' => 'login_contrasena',
                'label' => 'contraseña',
                'rules' => 'alpha_numeric|required|trim|min_length[1]|max_length[15]',
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'alpha_numeric' => 'Ingresar una %s válida',
                    'min_length'    => 'Ingresar una %s válida',
                    'max_length'    => 'Ingresar una %s válida',
                    
                    )
        ),
    );

}


?>