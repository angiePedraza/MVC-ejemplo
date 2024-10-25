<?php
session_start();
include_once "../modelo/usuarioModelo.php";

class UsuarioControlador{

 public $email;
 public $password;

 public function ctrIniciarSesion(){
     $objRespuesta = UsuarioModelo::mdIniciarSesion($this ->email,$this->password);
     echo json_encode($objRespuesta);
 }

}

if(isset($_POST["iniciarSesion"]) == "ok"){

    $objUsuario = new UsuarioControlador();
    $objUsuario -> email = $_POST["email"];
    $objUsuario ->password = $_POST["password"];
    $objUsuario ->ctrIniciarSesion();
}