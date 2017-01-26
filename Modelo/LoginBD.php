<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 13:23
 */
require_once "../Modelo/GenericoBD.php";
//funciones para el logueo

class LoginBD
{
    public static function logueo()
    {
        $conexion=GenericoBD::conectar();

        $nombre=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];

        //consulta en la base de datos
        $consulta="SELECT * FROM Usuario WHERE NomUsuario='".$nombre."' AND Contrasena='".$contrasena."'";

        $resultado = mysqli_query($conexion, $consulta);

        $fila = mysqli_fetch_object($resultado);

        GenericoBD::desconectar($conexion);
        //Cuando encuentra algun resultado retorna true cuando no retorna false

        if($resultado->num_rows!= 0)

        {
            return true;

        }

        else
        {
            return false;
        }
        

    }
}