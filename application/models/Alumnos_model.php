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
        return $this->db->query(" SELECT idUsuarios , rutUsuario, nombres, apellidos FROM usuarios WHERE rol = '3';" );
         
    }

    public function insertarNuevaRespuestaFormSocioDemografico($data)
    {
        
        print_r($data);
        // Crear la consulta SQL
        $sql = "INSERT INTO formulario_sociodemografico (rut_usuario, carrera, genero, edad, nacionalidad, carreraPrimeraOpcion, convivencia, tiempoDeTrasladoHastaLaEscuela, carreraDeProcedencia, razonParaElegir, condicionMental, beneficioDeGratuidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Ejecutar la consulta usando bindings para evitar inyección de SQL
        $this->db->query($sql, array($data['formSocio_rut'], $data['formSocio_carreraActual'], $data['formSocio_genero'], $data['formSocio_edad'], $data['formSocio_nacionalidad'], $data['formSocio_CualFueSuPrimeraCarrera'], $data['formSocio_convivencia'], $data['formSocio_trayecto'], $data['formSocio_CualFueCarreraDePrecedencia'], $data['formSocio_razonParaElegirLaCarreraActual'], $data['formSocio_condicionMentalDiagnosticadaSiNoNose'], $data['formSocio_beneficioGratuidadSiNo']));
        
        // Opcional: Puedes retornar true/false dependiendo del éxito del insert
        if ($this->db->affected_rows() > 0) {
            return true; // Inserción exitosa
        }
        return false; // Error en la inserción
    }

    

}