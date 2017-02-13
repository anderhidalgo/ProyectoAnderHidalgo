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

    public static function buscarAlbum() {
        //funcion que nos busca el album por su id
        $conexion=GenericoBD::conectar();

        $id = $_POST["album"];

        $consulta = "SELECT * FROM Album WHERE IdAlbum ='".$id."'";

        $rs = mysqli_query($conexion, $consulta);

        if ($rs->num_rows !=0)
        {
            $fila = mysqli_fetch_object($rs);

            $album = new Album($fila->Titulo, $fila->Descripcion, $fila->Fecha, $fila->Pais, $fila->Usuario);

            $album->setIdAlbum($fila->IdAlbum);

            $_SESSION["album"] = serialize($album);
            GenericoBD::desconectar($conexion);
            return true;

        }

        else
        {
            return false;
        }


    }


    public static function insertarAlbum(){
        //funcion que nos inserta un album
        $conexion=GenericoBD::conectar();
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $fecha  = $_POST["fecha"];
        $pais  = $_POST["pais"];
        $usu = unserialize($_SESSION["usuario"]);

        $nombre  = $usu->getNomUsuario();

        $album = new Album($titulo, $descripcion ,$fecha ,$pais ,$nombre);

        $consulta = "INSERT INTO Album (Titulo, Descripcion, Fecha, Pais, Usuario) VALUES ('".$album->getTitulo()."', '".$album->getDescripcion()."', '".$album->getFecha()."', '".$album->getPais()."', '".$album->getUsuario()."')";
        mysqli_query($conexion, $consulta);

        GenericoBD::desconectar($conexion);

    }


    public static function buscarAlbumes(){
        //funcion que nos busca los albumes por usuario
        $conexion=GenericoBD::conectar();

        $usu = unserialize($_SESSION["usuario"]);

        $consulta = "SELECT * FROM Album WHERE Usuario = '".$usu->getNomUsuario()."'";

        $resultado = mysqli_query($conexion, $consulta);

        $fila = mysqli_fetch_object($resultado);

        $albumes = [];

        while($fila != null)
        {
            $album = new Album($fila->Titulo, $fila->Descripcion, $fila->Fecha, $fila->Pais, $fila->Usuario);
            $album->setIdAlbum($fila->IdAlbum);
            array_push($albumes, $album);
            $fila = mysqli_fetch_object($resultado);
        }
        $_SESSION["albumes"] = $albumes;

        GenericoBD::desconectar($conexion);


    }


}