

<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Preguntas_model extends CI_Model {



    public function __construct()
	{
		parent::__construct();

        

		$this->load->database();

		$this->load->helper(array('ingresarRespuestas'));

	}
    

    
    public function buscarPreguntas()
    {
        $consulta = $this->db->query('  SELECT  p.idPregunta,p.pregunta, d.idDimension,d.nombreDimension
                                        FROM pregunta_dimension as pd
                                        INNER JOIN preguntas_cuestionario_mslq as p ON pd.idPregunta = p.idPregunta
                                        INNER JOIN dimensiones as d ON d.idDimension = pd.idDimension;');


        return $consulta->result();
    }


    public function buscarDimensiones()
    {
        $consulta = '  SELECT  idDimension, nombreDimension
                       FROM dimensiones;';

        return $this->db->query($consulta)->result();

    }



    public function totalDePreguntas(){

        static $cantidadDePreguntas;
            //return $cantidadDePreguntas;
        
        if($cantidadDePreguntas == 0){
            $consulta = $this->db->query("  SELECT COUNT(pregunta) AS cantidadDePreguntas 
                                            FROM preguntas_cuestionario_mslq ;");
            $cantidadDePreguntas = $consulta->row()->cantidadDePreguntas;
        }
        //$cantidadDePreguntas++;


            return $cantidadDePreguntas;
    

    }
    

    private function calcularDimensiones (){
    {
        $consulta = '   SELECT  p.idPregunta,p.pregunta, d.idDimension,d.nombreDimension
                        FROM pregunta_dimension as pd
                        INNER JOIN preguntas_cuestionario_mslq as p ON pd.idPregunta = p.idPregunta
                        INNER JOIN dimensiones as d ON d.idDimension = pd.idDimension;';


        return $this->db->query($consulta)->result();
    }

    }
    
    public function insertarRespuestasDelCuestionario ($respuestas , $cantidadDePreguntas ){

        $consulta = $this->db->query( crearValoresDeConsultaDeInsercion($respuestas,$cantidadDePreguntas ) );


        return $consulta;
    }
    
    public function obtenerResultados( )
    {
        $consulta = '   SELECT  p.pregunta, p.idPregunta, r.respuesta as respuesta, d.idDimension, d.nombreDimension
                        FROM pregunta_dimension as pd
                        INNER JOIN preguntas_cuestionario_mslq as p ON pd.idPregunta = p.idPregunta
                        INNER JOIN dimensiones as d ON d.idDimension = pd.idDimension
                        INNER JOIN respuestas_de_cuestionario as r ON r.idPregunta = pd.idPregunta;';

        return $this->db->query($consulta)->result();
    }
}
