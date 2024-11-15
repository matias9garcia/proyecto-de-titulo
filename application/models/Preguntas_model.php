

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
        $consulta = $this->db->query('  SELECT  idDimension, nombreDimension
                                        FROM dimensiones ');


        return $consulta->result();
    }



    public function totalDePreguntas(){

        static $cantidadDePreguntas=0;
        
        
        if($cantidadDePreguntas== 0){
            $consulta = $this->db->query("  SELECT COUNT(pregunta) AS cantidadDePreguntas 
                                            FROM preguntas_cuestionario_mslq ;");
            $cantidadDePreguntas = $consulta->row()->cantidadDePreguntas;
        }


            return $cantidadDePreguntas;
    

    }
    

    private function calcularDimensiones (){

    {
        $consulta = $this->db->query('  SELECT  p.idPregunta,p.pregunta, d.idDimension,d.nombreDimension
                                        FROM pregunta_dimension as pd
                                        INNER JOIN preguntas_cuestionario_mslq as p ON pd.idPregunta = p.idPregunta
                                        INNER JOIN dimensiones as d ON d.idDimension = pd.idDimension;');


        return $consulta->result();
    }

    }
    
    public function insertarRespuestasDelCuestionario ($respuestas , $cantidadDePreguntas ){

        $consulta = $this->db->query( crearValoresDeConsultaDeInsercion($respuestas,$cantidadDePreguntas ) );


        return $consulta;
    }

}