<?php
require_once("./model/formularioModel.php");
class formularioController{
    private $formulario;
    public function __construct(){
        $this->formulario = new Formulario();
    }
    
    static function index(){        
        require_once("./view/formularioView.php");
    }

    static function guardar(){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono= $_REQUEST['telefono'];
        $direccion = $_REQUEST['direccion'];
        $email = $_REQUEST['email'];
        $usuario = $_REQUEST['usuario'];
        $password = $_REQUEST['password'];
        $data = "'".$nombre."','".$apellido."','".$telefono."','".$direccion."','".$email."','".$usuario."','".$password."'";
                 // ejemplo en java --- > System.out.println("'ronal','tamayo','3116184030'");

        $estudiante = new Formulario();
        $dato = $estudiante->insertar("estudiante",$data);
        
        header("location:./");
    }


   //mostar
   static function mostrar(){
        $id = $_REQUEST['id'];
        $estudiante = new Formulario();
        $dato = $estudiante->mostrar($id);
        require('./view/mostrar_usuario.php');
        
   }

    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono= $_REQUEST['telefono'];
        $direccion = $_REQUEST['direccion'];
        $email = $_REQUEST['email'];
        $usuario = $_REQUEST['usuario'];
        $password = $_REQUEST['password'];
        $data = "nombre='" . $nombre . "', apellido='" . $apellido . "', telefono='" . $telefono . "', direccion='" . $direccion . "', email='" . $email . "', usuario='" . $usuario . "', password='" . $password . "'";
        $estudiante = new Formulario();
        $dato = $estudiante->actualizar("estudiante",$data,"estudiante_id=".$id);
        header("location:./");
    }


    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $estudiante = new Formulario();
        $dato = $estudiante->eliminar("estudiante","estudiante_id=".$id);
        header("location:./ejkbwuecjwbjebcwcñwphicpwñ");
    }


}

   



   


