<?php
/**
 * Created by PhpStorm.
 * User: ander
 * Date: 29/01/17
 * Time: 23:52
 */

//La funcion para sacar los paises de la base de datos

require_once '../Modelo/Pais.php';
require_once '../Modelo/GenericoBD.php';

class PaisBD{

    public static function obtenerPaises(){

        $conexion=GenericoBD::conectar();

        //Consulta con la base de datos
        $consulta = "SELECT * FROM Pais";

        $resultado = mysqli_query($conexion, $consulta);

        $fila = mysqli_fetch_object($resultado);

        //Iniciamos la sesion
        session_start();
        //Creamos un array vacio de paises
        $paises = [];

        //Mientras encuentre una fila crea el objeto pais

        while($fila!=0)

        {
            $pais = new Pais($fila->IdPais, $fila->NomPais);

            array_push($paises, $pais);

            $fila = mysqli_fetch_object($resultado);
        }

        //En $_session metemos $paises que hemos creado antes
        $_SESSION["paises"] = $paises;


        GenericoBD::desconectar($conexion);
    }



}