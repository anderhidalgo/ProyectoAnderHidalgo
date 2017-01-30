<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 13:23
 */
require_once "../Modelo/GenericoBD.php";

session_start();

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



        //Cuando encuentra algun resultado va al formulario principal si no vuelve a la pagina de login y nos mostrara un error

        if($resultado->num_rows!= 0)
        {
            $_SESSION["usuario"]=$fila;
            header('Location: ../Vista/formPrincipal.php');

        }
        else
        {
            header('Location: ../index.php');
        }


        GenericoBD::desconectar($conexion);


    }

}