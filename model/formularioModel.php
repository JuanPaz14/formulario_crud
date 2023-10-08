<?php
class Formulario{
    private $Modelo;
    private $db;    
    private $datos;    
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost; dbname=calificaciones','root','');
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla."(nombre, apellido, telefono, direccion, email, usuario, password) values(". $data .")";
        echo $consulta;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function mostrar($condicion){
        $consu = "SELECT * FROM estudiante WHERE estudiante_id = :id";
        $stmt = $this->db->prepare($consu);
        $stmt->bindParam(':id', $condicion, PDO::PARAM_INT); // Vincula :id con $condicion como entero
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public function actualizar($tabla, $data, $condicion){       
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }

}