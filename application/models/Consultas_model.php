<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Consultas_model extends CI_Model {


    public function __construct()
	{
		parent::__construct();


		$this->load->database();
	}
    


    public function seleccionarPreguntas()
    {

/*
       $this->db->query(" SELECT  p.pregunta, d.nombreDimension
        FROM pregunta_dimension as pd
        INNER JOIN preguntas_cuestionario_mslq as p ON pd.idPregunta = p.idPregunta
        INNER JOIN dimensiones as d ON d.idDimension = pd.idDimension;";
*/
/*
        $this->db->select('p.pregunta', 'd.nombreDimension');    
        $this->db->from('pregunta_dimension as pd');
        $this->db->join('preguntas_cuestionario_mslq as p', 'pd.idPregunta = p.idPregunta', 'inner');
        $this->db->join('dimensiones as d ', 'd.idDimension = pd.idDimension', 'inner');
*/

/*
        $this->db->select("*");
        $consulta   =   $this->db->get("preguntas_cuestionario_mslq");
        return    $consulta->result();   
*/

        $resultado = $this->db->query(" SELECT  p.idPregunta,p.pregunta, d.nombreDimension
                                        FROM pregunta_dimension as pd
                                        INNER JOIN preguntas_cuestionario_mslq as p ON pd.idPregunta = p.idPregunta
                                        INNER JOIN dimensiones as d ON d.idDimension = pd.idDimension;");
        return $resultado->result_array();
    }

    public function actualizarDatosUsuarios()
    {


    }
    public function borrarUsuario()
	{


        
	}
    
}
