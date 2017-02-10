<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 2/2/17
 * Time: 12:18
 */
require_once '../Modelo/GenericoBD.php';
require_once '../Modelo/Usuario.php';



class BorrarBD
{

public static function borrar(){

    try{
        $conexion=GenericoBD::conectar();


        $usu =  unserialize($_SESSION["usuario"]);


        $consulta = "DELETE FROM Usuario WHERE NomUsuario = '".$usu->getNomUsuario()."'";


        $rs = mysqli_query($conexion, $consulta);

        if($rs){
            return true;

        }else
        {
            return false;
        }

        GenericoBD::desconectar($conexion);
    }catch(Exception $e){
        echo $e;
    }

    }

}


