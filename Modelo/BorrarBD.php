<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 2/2/17
 * Time: 12:18
 */
require_once 'GenericoBD.php';
require_once 'Usuario.php';



class BorrarBD
{

public static function borrar(){

    try{
        //funcion que nos borra el usuario actual conectado
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


