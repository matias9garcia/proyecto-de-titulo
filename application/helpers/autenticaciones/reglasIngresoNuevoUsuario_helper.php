<?php 
function getReglasDeNuevoUsuario(){

    return  array(
        array(
        
                'field' => 'rutUsuario',
                'label' => 'rut',
                'rules' => 'regex_match[/^(\d{1,2}(?:[\.]?\d{3}){2}-[\dkK])$/]|required|trim',
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'regex_match'   => 'Debes ingresar un RUT.'
                    )
                ),
        array(
        
                'field' => 'nombresUsuario',
                'label' => 'nombre',
                'rules' => 'alpha|required|trim',
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'alpha'   => 'Debes ingresar nombres'
                    )
                ),
        array(
        
                'field' => 'apellidosUsuario',
                'label' => 'apellido',
                'rules' => 'alpha|required|trim',
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'alpha'   => 'Debes ingresar apellidos.'
                    )
                )
    
    );

}


?>