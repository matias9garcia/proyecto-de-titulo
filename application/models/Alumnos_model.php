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

    public function consultarPorRutSocioDemo($rut){

        $rutSinDigitoVerificador = substr($rut, 0, -2); // Quita los últimos dos caracteres
        $rut = (int)$rutSinDigitoVerificador; // Convierte la cadena a un número entero

        return $this->db->query(" SELECT * FROM formulario_sociodemografico WHERE rut_usuario = $rut ORDER BY idFormulario DESC LIMIT 1;" );
    }

    public function consultarRespuestasMSLQPorRut($rut){
        $rutSinDigitoVerificador = substr($rut, 0, -2); // Quita los últimos dos caracteres
        $rut = (int)$rutSinDigitoVerificador; // Convierte la cadena a un número entero

        return $this->db->query(" SELECT * FROM respuestas_formulario_mslq WHERE rut_usuario = $rut ORDER BY id_respuesta DESC LIMIT 1;" );
    }

    public function insertarNuevaRespuestaFormSocioDemografico($data)
    {
        
        // print_r($data);
        // Crear la consulta SQL
        $sql = "INSERT INTO formulario_sociodemografico (rut_usuario, carrera, genero, edad, nacionalidad, carreraPrimeraOpcion, convivencia, tiempoDeTrasladoHastaLaEscuela, carreraDeProcedencia, razonParaElegir, condicionMental, tipoDeCondicionMental, beneficioDeGratuidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Ejecutar la consulta usando bindings para evitar inyección de SQL
        $this->db->query($sql, array($data['formSocio_rut'], $data['formSocio_carreraActual'], $data['formSocio_genero'], $data['formSocio_edad'], $data['formSocio_nacionalidad'], $data['formSocio_CualFueSuPrimeraCarrera'], $data['formSocio_convivencia'], $data['formSocio_trayecto'], $data['formSocio_CualFueCarreraDePrecedencia'], $data['formSocio_razonParaElegirLaCarreraActual'], $data['formSocio_condicionMentalDiagnosticadaSiNoNose'], $data['formSocio_tipoCondicionMental'], $data['formSocio_beneficioGratuidadSiNo']));
        
        // Opcional: Puedes retornar true/false dependiendo del éxito del insert
        if ($this->db->affected_rows() > 0) {
            return true; // Inserción exitosa
        }
        return false; // Error en la inserción
    }

    public function insertarNuevaRespuestaFormMSLQ($data)
    {
        // Crear la consulta SQL
        $sql = "INSERT INTO respuestas_formulario_mslq 
        (   rut_usuario, 
            respuesta_1,
            respuesta_2,
            respuesta_3,
            respuesta_4,
            respuesta_5,
            respuesta_6,
            respuesta_7,
            respuesta_8,
            respuesta_9,
            respuesta_10,
            respuesta_11,
            respuesta_12,
            respuesta_13,
            respuesta_14,
            respuesta_15,
            respuesta_16,
            respuesta_17,
            respuesta_18,
            respuesta_19,
            respuesta_20,
            respuesta_21,
            respuesta_22,
            respuesta_23,
            respuesta_24,
            respuesta_25,
            respuesta_26,
            respuesta_27,
            respuesta_28,
            respuesta_29,
            respuesta_30,
            respuesta_31,
            respuesta_32,
            respuesta_33,
            respuesta_34,
            respuesta_35,
            respuesta_36,
            respuesta_37,
            respuesta_38,
            respuesta_39,
            respuesta_40,
            respuesta_41,
            respuesta_42,
            respuesta_43,
            respuesta_44) VALUES 
            ( 
            ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?,  
            ?, ?, ?, ?, ?
            )";
        
        // Ejecutar la consulta usando bindings para evitar inyección de SQL
        $this->db->query($sql, array(
            $data['rut_usuario'], 
            (int) $data['pregunta_1'],
            (int) $data['pregunta_2'],
            (int) $data['pregunta_3'],
            (int) $data['pregunta_4'],
            (int) $data['pregunta_5'],
            (int) $data['pregunta_6'],
            (int) $data['pregunta_7'],
            (int) $data['pregunta_8'],
            (int) $data['pregunta_9'],
            (int) $data['pregunta_10'],
            (int) $data['pregunta_11'],
            (int) $data['pregunta_12'],
            (int) $data['pregunta_13'],
            (int) $data['pregunta_14'],
            (int) $data['pregunta_15'],
            (int) $data['pregunta_16'],
            (int) $data['pregunta_17'],
            (int) $data['pregunta_18'],
            (int) $data['pregunta_19'],
            (int) $data['pregunta_20'],
            (int) $data['pregunta_21'],
            (int) $data['pregunta_22'],
            (int) $data['pregunta_23'],
            (int) $data['pregunta_24'],
            (int) $data['pregunta_25'],
            (int) $data['pregunta_26'],
            (int) $data['pregunta_27'],
            (int) $data['pregunta_28'],
            (int) $data['pregunta_29'],
            (int) $data['pregunta_30'],
            (int) $data['pregunta_31'],
            (int) $data['pregunta_32'],
            (int) $data['pregunta_33'],
            (int) $data['pregunta_34'],
            (int) $data['pregunta_35'],
            (int) $data['pregunta_36'],
            (int) $data['pregunta_37'],
            (int) $data['pregunta_38'],
            (int) $data['pregunta_39'],
            (int) $data['pregunta_40'],
            (int) $data['pregunta_41'],
            (int) $data['pregunta_42'],
            (int) $data['pregunta_43'],
            (int) $data['pregunta_44']
        ));
        
        // Opcional: Puedes retornar true/false dependiendo del éxito del insert
        if ($this->db->affected_rows() > 0) {
            return true; // Inserción exitosa
        }
        return false; // Error en la inserción
    }

}