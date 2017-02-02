<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 13:23
 */
require_once "../Modelo/GenericoBD.php";
require_once "../Vista/formLogin.php";

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
            /*
            $usu = new Usuario();
            $usu->setNomUsuario($fila['nomUsuario']);


            $_SESSION["usuario"] = serialize($usu);

            para unserializar

            $usuario = unserialize($_SESSION["usuario"]);
             */
            $_SESSION["usuario"]=$fila;
            header('Location: ../Vista/formPrincipal.php');

        }
        else
        {
            //Me lleva a index si falla lo he cambiado por un mensaje de error
            //header('Location: ../index.php');
            formLogin::fInicio("ERROR el usuario no existe, registrate para poder acceder a la pagina");
        }


        GenericoBD::desconectar($conexion);


    }

}