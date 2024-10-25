<?php
session_start();
include_once "../Modelo/modeloGuardar.php";

class usuarioGuardar{

 public $nombre;
 public $apellido;
 public $telefono;
 public $email;
 public $password;


 public function ctrGuardar(){
     $objRespuesta = modeloGuardar::mdGuardar( $this->nombre, $this->apellido, $this->telefono,$this ->email,$this->password);
     echo json_encode($objRespuesta);
 }

}

if(isset($_POST["Guardar"]) == "ok"){

    $objUsuario = new usuarioGuardar();
    $objUsuario ->nombre = $_POST["nombres"];
    $objUsuario ->apellido = $_POST["apellidos"];
    $objUsuario ->telefono = $_POST["telefono"];
    $objUsuario -> email = $_POST["email"];
    $objUsuario ->password = $_POST["password"];
    $objUsuario ->ctrGuardar();
}