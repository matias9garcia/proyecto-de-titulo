<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Usuarios_model extends CI_Model {



    public function __construct()
	{
		parent::__construct();

		$this->load->database();

		

	}
    public function getTodosLosUsuarios()
    {
        $consulta = $this->db->query("SELECT * FROM usuarios;");
    
        return $consulta;
    

    }

    public function buscarUsuario($rutUsuario)
    {
        $consulta = $this->db->query("SELECT * FROM usuarios WHHERE ".$rutUsuario."== rutUsuario");
        return $consulta->result();
    }


    public function login( $rut, $contrasena ){
        //$resultadoDeBusquedaDelUsuario = $this->db->get_where( 'usuarios' , array( 'id' => $contrasena , 'nombre_usuario' => $usuario ), 1 );

        $resultadoDeBuscarUsuario = $this->db->query(" SELECT idUsuarios, rol , rutUsuario, nombres, apellidos FROM usuarios WHERE rutUsuario = '".$rut."' AND  contrasena = '".$contrasena."';" );

         if(    !( $resultadoDeBuscarUsuario->result() )   ){ //si no se encontró devuelve false
            return false;
        }
        
        

            return $resultadoDeBuscarUsuario->row();
        

        
    }

    public function insertarUsuario($rut, $rol, $nombres,$apellidos)
    {

        $contrasena=substr( str_replace("-","", $rut),-4);//extrae los 4 ultimos digitos del rut

        $this->db->query("INSERT INTO usuarios ( idUsuarios, rol, rutUsuario, contrasena, estado, nombres, apellidos ) VALUES ('','".$rol."', '".$rut."','".$contrasena."','0','".$nombres."','".$apellidos."');");//

//	idUsuarios 	rol 	rutUsuario 	contrasena 	estado 	nombres 	apellidos

    
    }
}