<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Administrador_controler extends CI_Controller {




    public function __construct( ){

        parent::__construct();
	

       
    }

    public function index(){
    
        $this->load->view('administrador_view');
    }
	public function mostrarUsuarios(){

		$query=$this->Usuarios_model->getTodosLosUsuarios();

        $i=1;

        foreach ($query->result() as $fila){

            
            $ejemploArray_JSON[]=array(
                                    'id'=>$i,//$fila->id,
                                    'nombreUsuarios'=> $fila->nombres,
                                    "Acciones"=>' <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Ver reporte</button>
                                                    <button type="button" class="btn btn-warning">Bloquear Alumno</button>
                                                    <!--<button type="button" class="btn btn-danger">eliminar</button>-->
                                                    </div> '
                                    
                                );
                                $i++;

        };
        $resultado = array("data"=>$ejemploArray_JSON);
        echo json_encode($resultado);
        


    
}

	public function pruebaArrayInput()
	{

		echo $this->input->post("coordinadorRUT");
	}

    

}