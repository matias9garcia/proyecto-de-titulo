<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Administrador_controler extends CI_Controller {




    public function __construct( ){

        parent::__construct();
		$this->load->helper(array( 'autenticaciones/reglasIngresoNuevoUsuario' ) );
	

       
    }

    public function index(){
    
        $this->load->view('administrador_view');
    }
	public function mostrarCoordinadores(){

		$query=$this->Usuarios_model->getTodosLosUsuarios();

        $i=1;

        foreach ($query->result() as $fila){

            
            $ejemploArray_JSON[]=array(
                                    'id'=>$i,//$fila->id,
                                    'nombreUsuarios'=> $fila->nombres,
                                    /*"Acciones"=>' <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Ver reporte</button>
                                                    <button type="button" class="btn btn-warning">Bloquear Alumno</button>
                                                    <!--<button type="button" class="btn btn-danger">eliminar</button>-->
                                                    </div> '
                                    */
                                );
                                $i++;

        };
        $resultado = array("data"=>$ejemploArray_JSON);
        echo json_encode($resultado);
        


    
}


    public function insertarCoordinador()
	{

		$reglasDeValidacion	=	getReglasDeNuevoUsuario();
        

        //$this->form_validation->set_rules('ingresarUsuario', 'name','regex_match[/^(\d{1,2}(?:[\.]?\d{3}){2}-[\dkK])$/]|trim|required' );
        
        
        $this->form_validation->set_rules( $reglasDeValidacion);
		
		if(	 $this->form_validation->run() === FALSE)
		{
			$this->output->set_status_header( 400 );

            echo json_encode( array(
                            'mensajeError1' => form_error('rutUsuario' ),
                            'mensajeError2' => form_error('nombrestUsuario' ),
                            'mensajeError3' => form_error('apellidosUsuario' ),
                        )
                );
        }
        
        else
        
        {

			/*obtener los datos ingresados desde la vista view/login_view.php 
			que son obtenidos en el formulario a travez de metodo post*/

			$rutUsuario =$this->input->post('rutUsuario');
			$nombrestUsuario =$this->input->post('nombresUsuario');
			$apellidosUsuario =$this->input->post('apellidosUsuario');

			$this->Usuarios_model->insertarUsuario( $rutUsuario ,"2",$nombrestUsuario, $apellidosUsuario );

			
			
        
		}
	}

    

}