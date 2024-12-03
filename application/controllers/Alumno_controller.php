<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Alumno_controller extends CI_Controller {

    //public $variable;

    public function __construct( ){

        parent::__construct();

        
		$this->load->helper(array('autenticaciones/reglasDeFormularioMSLQ_helper'));

		$this->load->helper(array('autenticaciones/reglasDeFormularioSociodemografico_helper'));


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

    public function validarFormularioSociodemografico()
    {
		// Recoger los datos del POST como JSON
        $data = json_decode(file_get_contents("php://input"), true);

		// Enviar los datos recibidos de vuelta al frontend para inspección
		// echo json_encode([
		// 	'success' => true,
		// 	'message' => 'Datos recibidos correctamente.',
		// 	'data' => $data // Devuelve el JSON recibido
		// ]);
		// return;

		// Llamar al modelo para insertar
        $resultado = $this->Alumnos_model->insertarNuevaRespuestaFormSocioDemografico($data);

        // // Responder al cliente
        // if ($resultado) {
        //     echo json_encode(['success' => true, 'message' => 'Alumno insertado correctamente.']);
        // } else {
        //     echo json_encode(['success' => false, 'message' => 'Error al insertar el alumno.']);
        // };

		// $this->Alumnos_model->insertarNuevaRespuestaFormSocioDemografico(
		// 	$rut_usuario, $carrera, $genero, $edad, $nacionalidad, 
		// 	$carreraPrimeraOpcion, $convivencia, $tiempoDeTrasladoHastaLaEscuela, 
		// 	$carreraDeProcedencia, $razonParaElegir, $condicionMental, $beneficioDeGratuidad);
        // $reglasDeFormularioSociodemografico	= getReglasDeformSocio();

		// $this->form_validation->set_rules($reglasDeFormularioSociodemografico);

		//print('formSocio_carreraPrimeraOpcionSiNo');


//         if(	 $this->form_validation->run() === FALSE)
// 		{

// 			$this->output->set_status_header( 400 );

//             $erroresDeValidacion  =  array(
//         	/**form_error('ATRIBUTO name DE LA ETIQUETA <input>') */

// 			/**ERRORES EN LA INFORMACION INGRESADA
// 			 * SI ESTA VACIO O SI NO CUMPLE CON LO ESPECIFICADO
// 			 */

// 			/**error campo rut */
//         		'formSocio_rut' 
// 				=> form_error('formSocio_rut'),

// 			/**error campo nombre */
//         		'formSocio_nombres' 
// 				=> form_error('formSocio_nombres'),

// 			/**error campo apellidos */
//         		'formSocio_apellidos' 
// 				=> form_error('formSocio_apellidos'),
				

// 			// /**error campo nacionalidad */
//         	// 	'formSocio_nacionalidad'  
// 			// 	=>  form_error('formSocio_nacionalidad'),
			
// 			// /**error campo edad */
//         	// 	'formSocio_edad'  
// 			// 	=>  form_error('formSocio_edad'),
			
// 			/**error campo genero */
//         		'formSocio_genero'  
// 				=>  form_error('formSocio_genero'),
			
// 			/**error campo carreraActual */
//         		'formSocio_carreraActual'  
// 				=>  form_error('formSocio_carreraActual'),

			
// 			/**error campo carreraPrimeraOpcion */
//         		'formSocio_carreraPrimeraOpcionSiNo'  
// 				=>  form_error('formSocio_carreraPrimeraOpcionSiNo'),

// 			/**error campo convivencia */
//         		'formSocio_convivencia'  
// 				=>  form_error('formSocio_convivencia'),

// 			/**error campo tiempoDeTraslado */
//         		'formSocio_trayecto'  
// 				=>  form_error('formSocio_trayecto'),
        	
// 			/**error campo carreraDePrecedencia */
// 				'formSocio_carreraDePrecedenciaSiNo'  
// 				=>  form_error('formSocio_carreraDePrecedenciaSiNo'),

// 			/**error campo razonParaElegirLaCarreraActual */
// 				'formSocio_razonParaElegirLaCarreraActual'  
// 				=>  form_error('formSocio_razonParaElegirLaCarreraActual'),

//         		'formSocio_condicionMentalDiagnosticadaSiNoNose'  
// 				=>  form_error('formSocio_condicionMentalDiagnosticadaSiNoNose'),

//         		'formSocio_beneficioGratuidadSiNo'  
// 				=>  form_error('formSocio_beneficioGratuidadSiNo'),
        
//       		);
// /**validar input radio ingresados  */

// 			/**validar input radio  */
// 			if($this->input->post('formSocio_carreraPrimeraOpcionSiNo')==='No'){
				
				
// 				$erroresDeValidacion+=['formSocio_carreraPrimeraOpcion' 
// 				=> form_error('formSocio_carreraPrimeraOpcion')];
// 			}


// 			/**validar presiono Si en el input radio
// 			 *  sobre su carrera de precedencia */
// 			if($this->input->post('formSocio_carreraDePrecedenciaSiNo')==='Si'){
					
				
// 				$erroresDeValidacion+=['formSocio_carreraDePrecedenciaIngresar' 
// 				=> form_error('formSocio_carreraDePrecedenciaIngresar')];
// 			}

// 			/**validar  otroMotivo*/
// 			if($this->input->post('formSocio_razonParaElegirLaCarreraActual')==='otroMotivo'){
					
				
// 				$erroresDeValidacion+=['formSocio_razonParaElegirLaCarreraActualIngresarMotivo' 
// 				=> form_error('formSocio_razonParaElegirLaCarreraActualIngresarMotivo')];
// 			}

// 			/**validar si presiono Si en el input radio sobre su carrera de precedencia */
// 			/** */
// 			if($this->input->post('formSocio_condicionMentalDiagnosticadaSiNoNose')==='Si'){
				
// 				$erroresDeValidacion+=['formSocio_nombreDeCondicionMentalDiagnosticada' 
// 				=> form_error('formSocio_nombreDeCondicionMentalDiagnosticada')];
// 			}




// 			//var_dump($erroresDeValidacion);
				
// 			echo json_encode( $erroresDeValidacion );

//         }else
// 		{

//         //echo $_POST["formSocio_beneficioGratuidadSiNo"];//beneficio

//         //$formSocio=array();

//         $formSocio_rut = $this->input->post("formSocio_rut");

//          $formSocio_nombres = $this->input->post("formSocio_nombres");
        
//          $formSocio_apellidos = $this->input->post("formSocio_apellidos");
        
//          $formSocio_nacionalidad = $this->input->post("formSocio_nacionalidad");
        
//          $formSocio_edad = $this->input->post("formSocio_edad");

//          $formSocio_genero = $this->input->post("formSocio_genero");

//          $formSocio_carreraActual = $this->input->post("formSocio_carreraActual");

//          $formSocio_carreraPrimeraOpcionSiNo = $this->input->post("formSocio_carreraPrimeraOpcionSiNo");
        
//         if($formSocio_carreraPrimeraOpcionSiNo == "NO"){

//              $formSocio_carreraPrimeraOpcion = $this->input->post("formSocio_carreraPrimeraOpcion");
            
//         }


//          $formSocio_convivencia = $this->input->post("formSocio_convivencia");

//          $formSocio_trayecto = $this->input->post("formSocio_trayecto");

//          $formSocio_carreraDePrecedenciaSiNo = $this->input->post("formSocio_carreraDePrecedenciaSiNo");

//         if($formSocio_carreraDePrecedenciaSiNo == "Si"){

//              $formSocio_carreraDePrecedenciaIngresar = $this->input->post("formSocio_carreraDePrecedenciaIngresar");

//         }


//          $formSocio_razonParaElegirLaCarreraActual = $this->input->post("formSocio_razonParaElegirLaCarreraActual");

//         if($formSocio_razonParaElegirLaCarreraActual == "otroMotivo"){

//              $formSocio_razonParaElegirLaCarreraActualIngresarMotivo = $this->input->post("formSocio_razonParaElegirLaCarreraActualIngresarMotivo");

//         }


//          $formSocio_condicionMentalDiagnosticadaSiNoNose = $this->input->post("formSocio_condicionMentalDiagnosticadaSiNoNose");

//         if($formSocio_condicionMentalDiagnosticadaSiNoNose == "SI"){

//              $formSocio_razonParaElegirLaCarreraActualIngresarMotivo = $this->input->post("formSocio_nombreDeCondicionMentalDiagnosticada");


//         }


//          $formSocio_beneficioGratuidadSiNo = $this->input->post("formSocio_beneficioGratuidadSiNo");

// 		echo json_encode($formSocio_rut);
// 		}

   
    }


}