<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 14:09
 */
//funciones para realizar el registro de un nuevo usuario

require_once 'Usuario.php';
require_once 'GenericoBD.php';

class RegistroBD

{

    public static function registroUsuario(){

        $conexion=GenericoBD::conectar();

        $nomusuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $email = $_POST["email"];
        $fecha  = $_POST["fechareg"];
        $ciudad  = $_POST["ciudad"];
        $pais  = $_POST["pais"];
        $foto  = $_POST["foto"];

        $usuario = new Usuario($nomusuario, $contrasena ,$email ,$fecha ,$ciudad ,$pais ,$foto);

        //insertamos en usuario los datos

        $consulta ="INSERT INTO Usuario(NomUsuario, Contrasena, Email, FNacimiento, Ciudad, Pais, Foto) VALUES ('".$usuario->getNomUsuario()."', '".$usuario->getContrasena()."','".$usuario->getEmail()."','".$usuario->getFNacimiento()."','".$usuario->getCiudad()."','".$usuario->getPais()."','".$usuario->getFoto()."') ";

        mysqli_query($conexion, $consulta);

        GenericoBD::desconectar($conexion);


    }



}