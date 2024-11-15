<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo_controller extends CI_Controller {


	public function index()
	{
		$this->load->view('formularioSocio_view');
	}
    public function abc(){
echo "<pre>";


        echo 5;

		
			//$usuario="19152977-4";$contrasena="2977";
			//$usuario= "19940449-0";$contrasena= "0449";
			$usuario="8135176-7";$contrasena="5176";
			
			



	 		$resultado = $this->Usuarios_model->login( $usuario , $contrasena );

		print_r( $resultado) ;
    }
}
