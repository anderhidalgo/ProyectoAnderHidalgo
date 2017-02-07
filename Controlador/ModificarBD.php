<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 2/2/17
 * Time: 12:17
 */
require_once '../Modelo/GenericoBD.php';
require_once '../Modelo/Usuario.php';

class ModificarBD
{

    public static function modificar(){

        $nomusuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $email = $_POST["email"];
        $fecha  = $_POST["fecha"];
        $ciudad  = $_POST["ciudad"];
        $pais  = $_POST["pais"];
        $foto  = $_POST["foto"];

        $usuario=new Usuario($nomusuario, $contrasena ,$email ,$fecha ,$ciudad ,$pais ,$foto);

        $conexion=GenericoBD::conectar();
        $consulta="UPDATE Usuario 
                    SET NomUsuario ='".$usuario->getNomUsuario()."', Contrasena ='".$usuario->getContrasena()."', Email ='".$usuario->getEmail()."', FNacimiento ='".$usuario->getFNacimiento()."', Ciudad ='".$usuario->getCiudad()."', Pais ='".$usuario->getPais()."', Foto ='".$usuario->getFoto()."'
                    WHERE NomUsuario ='".$_SESSION["usuario"]->NomUsuario."'";
        mysqli_query($conexion, $consulta);
        GenericoBD::desconectar($conexion);


    }



}