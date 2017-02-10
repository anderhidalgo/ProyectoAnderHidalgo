<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 7/2/17
 * Time: 12:11
 */

require_once 'GenericoBD.php';
require_once 'Album.php';
require_once 'Usuario.php';


class AlbumBD
{

    public static function buscarAlbumes() {

        $conexion=GenericoBD::conectar();

        $usu = unserialize($_SESSION["usuario"]);

        $consulta = "SELECT * FROM Album WHERE Usuario = '".$usu->getNomusuario()."'";

        $resultado = mysqli_query($conexion, $consulta);

        $fila = mysqli_fetch_object($resultado);

        //Crea array vacio
        $albumes = [];

        while($fila != null)

        {
            $album = new Album($fila->Titulo, $fila->Descripcion, $fila->Fecha, $fila->Pais, $fila->Usuario);

            array_push($albumes, $album);
            $fila = mysqli_fetch_object($resultado);

        }


        $_SESSION["albumes"] = $albumes;


        GenericoBD::desconectar($conexion);


    }


    public static function insertarAlbum(){

        $conexion=GenericoBD::conectar();
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $fecha  = $_POST["fecha"];
        $pais  = $_POST["pais"];
        $usu = unserialize($_SESSION["usuario"]);

        $nombre  = $usu->getNomusuario();

        $album = new Album($titulo, $descripcion ,$fecha ,$pais ,$nombre);

        $consulta = "INSERT INTO Album (Titulo, Descripcion, Fecha, Pais, Usuario) VALUES ('".$album->getTitulo()."', '".$album->getDescripcion()."', '".$album->getFecha()."', '".$album->getPais()."', '".$album->getUsuario()."')";
        mysqli_query($conexion, $consulta);

        GenericoBD::desconectar($conexion);

    }


    public static function buscarAlbum(){

        $conexion=GenericoBD::conectar();



        GenericoBD::desconectar($conexion);



    }


}