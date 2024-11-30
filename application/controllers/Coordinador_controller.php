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

		$alumnos = $this->Alumnos_model->obtenerTodosLosAlumnos()->result();

        $i=1;

        foreach ($alumnos as $fila){

            
            $ejemploArray_JSON[]=array(
                                    'id'=>$i,//$fila->id,
                                    'nombreAlumnos'=> $fila->nombres                                    
                                );
                                $i++;

        };
        $resultado = array("data"=>$ejemploArray_JSON);

        echo json_encode($resultado);
	}

	public function reporte()
	{
		$resultados = $this->Preguntas_model->obtenerResultados();
		
		$totalDePreguntas = $this->Preguntas_model->totalDePreguntas();

		$dimensiones = $this->Preguntas_model->buscarDimensiones();

		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',8);

		$pdf->Cell(40,10,utf8_decode('Reporte '));
		$pdf->Ln(10);

		

			for($i=1;$i<=$totalDePreguntas;$i++)
			{

				$textoPregunta = "(".$i.").- ".$resultados[$i-1]->pregunta;
				$textoRespuesta = $resultados[$i-1]->respuesta;
				$pdf->setX(20);
				$pdf->Cell(38,8,utf8_decode($textoPregunta) ,0,1);
					

				for($j=1;$j<=7;$j++)
				{

					if($j == $textoRespuesta)
					{
						$pdf->Cell(5,8,utf8_decode($textoRespuesta) ,1,0);
						$j++;
					}

					$pdf->Cell(5,8,utf8_decode($j) ,0,0);

				}

				
				$pdf->Ln();
			}
		
		$pdf->Output();
	}


}
