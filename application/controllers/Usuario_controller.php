<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require_once("Administrador_controller.php");
class Usuario_controller extends CI_Controller {

    public function __construct()
    {
        
        parent::__construct();

		$this->load->helper(array('autenticaciones/reglasDeLogin'));


    }


    public function index()
    {
        		$this->load->view('login_view');

    }


    public function IniciarSesion()
    {
$reglasDeValidacionLogin	=	getReglasDeLogin();


		$this->form_validation->set_rules($reglasDeValidacionLogin);

		//si en el formulario login no se ingresan los datos requeridos lanza los mensajes de error
		if(	 $this->form_validation->run() === FALSE){

			//recarga la pagina con los errores a la vista
			
			//en caso de que los campos esten vacios lanza los errores de 
			
			$this->output->set_status_header( 400 );
			
			$erroresDeValidacion = array(
				
				//error de input rut
				'login_rut' => form_error('login_rut'),
				
				//error de input contraseña
				'login_contrasena' => form_error('login_contrasena')
			);
			echo json_encode( $erroresDeValidacion );


		}
        
        else
        
        {

			/*obtener los datos ingresados desde la vista view/login_view.php 
			que son obtenidos en el formulario a travez de metodo post*/

			$rut = $this->input->post('login_rut');
			$contrasena = $this->input->post('login_contrasena');

			if( !$resultado = $this->Usuarios_model->login( $rut , $contrasena )    )
            {
				
				/*si el metodo nos devuelve FALSE(si no se encuentra el usuario)
				 muestra mensaje en vista "credenciales invalidas"*/

				$mensaje = array( "mensajeDeCredeciales" => "Credenciales no válidas" );

				$this->output->set_status_header( 401 );

				echo json_encode( $mensaje );

				//echo json_encode( $resultado );


                 
				
				exit();
			}
			$paginaUsuario="";
			if($resultado->rol == '1')
            {
                
				$paginaUsuario = 'Dashboard/Administrador';
			}
            
            if($resultado->rol == '2')
            {

				$paginaUsuario = 'Dashboard/Coordinador';
                
            }

            if($resultado->rol == '3')
            {
                
				$paginaUsuario = 'FormularioSocio';

			}

/**datos para crear la sesion */

			$data = array(
				'id' => $resultado->idUsuarios,
				'rol' => $resultado->rol,
				'rut' => $resultado->rutUsuario,
				'nombres' => $resultado->nombres,
				'apellidos' => $resultado->apellidos
		    );

			// REVISAR PARA PASAR
			$this->session->set_userdata($data);//se crea la sesion

			$mensaje = array( "url" => base_url( $paginaUsuario ) );


			echo json_encode( $mensaje );
		}

    }



    public function cerrarSesion(){
		
		$data = array( 'id', 'rol','rut', 'nombres', 'apellidos' );
		$this->session->unset_userdata($data);
		//$this->session->sess_destroy();
		redirect('/');

	}

    
}