<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Alumno_controller extends CI_Controller {

    //public $variable;


    public function __construct( ){

        parent::__construct();

        
		$this->load->helper(array('autenticaciones/reglasDeFormularioMSLQ'));



    }

    public function index()
    {   
        
        //array
        $data["preguntas"]   = $this->Preguntas_model->buscarPreguntas();
        $data["dimensiones"] = $this->Preguntas_model->buscarDimensiones();
        $this->load->view('preguntas_view',$data);
        

    }
    public function formulario()
    {

        $this->load->view('formularioSocio_view');

    }

    public function validarMSLQ()
    {
        $cantidadDePreguntas = $this->Preguntas_model->totalDePreguntas() ;
        

		$reglasDeValidacion=getReglasDeCuestionarioMSLQ( $cantidadDePreguntas );



/**asignar reglas de validacion del cuestionario */
		$this->form_validation->set_rules($reglasDeValidacion);
		
		if(	 $this->form_validation->run() === FALSE)
        {


		/**si el formulario tiene errores */
			$erroresDeValidacion=array();
			
			for($indice=1;$indice<=$cantidadDePreguntas;$indice++){
	
				$valorPregunta="pregunta_".$indice;
			
				$erroresDeValidacion += [ $valorPregunta => form_error($valorPregunta) ];
			}

			echo json_encode( $erroresDeValidacion );
                $this->output->set_status_header(400);


		}
        else
        {

			/**caso en que todas las preguntas fueron respondidas correctamente
			 * 
			 *	el formulario se envia correctamente */
			$preguntasCuestionario=array();
	
			for($indice=1;$indice<=$cantidadDePreguntas;$indice++){
	
				$valorPregunta="pregunta_".$indice;

				$respuesta=$this->input->post($valorPregunta);


				$preguntasCuestionario +=[ $indice => $respuesta ];
				
			}
			
			$preguntasCuestionario=$this->Preguntas_model->insertarRespuestasDelCuestionario( $preguntasCuestionario , $cantidadDePreguntas );
			
			echo json_encode( $preguntasCuestionario );
		}
    }

    public function insertarAlumno(){

        
    }
    public function validarMSLQ3(){
        $this->validarMSLQ2();
    }

}