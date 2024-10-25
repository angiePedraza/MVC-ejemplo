<?php
include_once "conexion.php";

class modeloGuardar{

    public static function mdGuardar($nombre, $apellido, $telefono,$email, $password){
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare(" INSERT INTO usuario (nombre,apellido,telefono,email,password)VALUES(:nombre,:apellido,:telefono,:email,:password)");
            $objRespuesta -> bindParam(":nombre",$nombre);
            $objRespuesta -> bindParam("apellido",$apellido);
            $objRespuesta -> bindParam(":telefono",$telefono);
            $objRespuesta -> bindParam(":email",$email);
            $objRespuesta -> bindParam(":password",$password);
            $objRespuesta ->execute();
            $objUsuario = $objRespuesta->rowCount();
            if($objUsuario != null){
                $mensaje=array("codigo" =>"200","mensaje"=> "el usuario existe en la base de datos");
            }else{
               $mensaje= array("codigo" =>"401","mensaje"=> "el usuario no existe en la base de datos");
            }
            $objRespuesta = null;

        } catch (Exception $e) {
            $mensaje = array("codigo" => "401","mensaje" =>$e->getMessage());
        }


        return $mensaje;
    }
}