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

        $contrasena = $_POST["contrasena"];
        $email = $_POST["email"];
        $fecha  = $_POST["fecha"];
        $ciudad  = $_POST["ciudad"];
        $pais  = $_POST["pais"];
        $foto  = $_POST["foto"];

        //$usuario=new Usuario($nomusuario, $contrasena ,$email ,$fecha ,$ciudad ,$pais ,$foto);

        $usuario = unserialize($_SESSION["usuario"]);

        $usuario->setContrasena($contrasena);
        $usuario->setEmail($email);
        $usuario->setFNacimiento($fecha);
        $usuario->setCiudad($ciudad);
        $usuario->setPais($pais);
        $usuario->setFoto($foto);

        $conexion=GenericoBD::conectar();
        $consulta="UPDATE Usuario 
                    SET Contrasena ='".$usuario->getContrasena()."', Email ='".$usuario->getEmail()."', FNacimiento ='".$usuario->getFNacimiento()."', Ciudad ='".$usuario->getCiudad()."', Pais ='".$usuario->getPais()."', Foto ='".$usuario->getFoto()."'
                    WHERE NomUsuario ='".$usuario->getNomUsuario()."'";
        mysqli_query($conexion, $consulta);

        $_SESSION["usuario"] = serialize($usuario);

        GenericoBD::desconectar($conexion);



    }



}