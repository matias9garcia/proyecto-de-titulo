<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Alumnos_model extends CI_Model {


    public function __construct()
	{
		parent::__construct();


		$this->load->database();
	}
    public function obtenerTodosLosAlumnos()
    {
        $resultado = $this->db->query(" SELECT idUsuarios , rutUsuario, nombres, apellidos FROM usuarios WHERE rol = '2';" );
        return $resultado;
    }
    

}