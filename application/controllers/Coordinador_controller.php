<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coordinador_controller extends CI_Controller {

    public function __construct( ){

        parent::__construct();
	

       
    }
	public function index()
	{

		$this->load->view('coordinador_view');
	}


    public function insertarAlumno()
	{






		$this->form_validation->set_rules(array(
                'field' => 'alumnoRUT',
                'label' => 'rut',
                'rules' => 'regex_match[/^(\d{1,2}(?:[\.]?\d{3}){2}-[\dkK])$/]|required|trim',
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'regex_match'   => 'Debes ingresar un RUT.'
                    )
        ));

		//si en el formulario login no se ingresan los datos requeridos lanza los mensajes de error
		if(	 $this->form_validation->run() === FALSE){

			//recarga la pagina con los errores a la vista
			
			//en caso de que los campos esten vacios lanza los errores de 
			
			$this->output->set_status_header( 400 );
			
			$erroresDeValidacion = array(
				
				//error de input rut
				'alumnoRUT' => form_error('alumnoRUT'),
				
			);
			echo json_encode( $erroresDeValidacion );


		}
        
        else
        
        {

			/*obtener los datos ingresados desde la vista view/login_view.php 
			que son obtenidos en el formulario a travez de metodo post*/

		$rutAlumno =$this->input->post('alumnoRUT');

		$this->Usuarios_model->insertarUsuario( $rutAlumno ,"2" );

			
		}
	}

	public function mostrarAlumnos()
	{

		$alumnos = $this->Alumnos_model->obtenerTodosLosAlumnos();

        $i=1;

        foreach ($alumnos->result() as $fila){

            
            $ejemploArray_JSON[]=array(
                                    'id'=>$i,//$fila->id,
                                    'nombreAlumnos'=> $fila->nombres,
                                    "Acciones"=>' <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Ver reporte</button>
                                                    <button type="button" class="btn btn-warning">Bloquear Alumno</button>
                                                    <!--<button type="button" class="btn btn-danger">eliminar</button>-->
                                                    </div> '
                                    
                                );
                                $i++;

        };
        $resultado = array("data"=>$ejemploArray_JSON);
        echo json_encode($resultado);
	}


}
