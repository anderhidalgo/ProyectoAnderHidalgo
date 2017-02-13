<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 10/2/17
 * Time: 12:29
 */
require_once 'GenericoBD.php';
require_once 'Foto.php';
//require_once 'Album.php';

class FotoBD
{

        public static function insertarFoto(){

            $conexion=GenericoBD::conectar();

            $titulo = $_POST["titulo"];
            $fecha = $_POST["fecha"];
            $pais = $_POST["pais"];
            $album  = $_POST["album"];

            $archivoFoto  = $_FILES['foto']['tmp_name'];
            $destinoFoto = "../Fotos/".$_FILES['foto']['name'];
            move_uploaded_file($archivoFoto, $destinoFoto);

            $foto = new Foto($titulo, $fecha ,$pais ,$album, $destinoFoto);

            $consulta = "INSERT INTO Foto (Titulo, Fecha, Pais, Album, Fichero) VALUES ('".$foto->getTitulo()."', '".$foto->getFecha()."', '".$foto->getPais()."', '".$foto->getAlbum()."', '".$foto->getFichero()."')";

            mysqli_query($conexion, $consulta);


            GenericoBD::desconectar($conexion);

        }


        public static function sFotos(){


            $conexion=GenericoBD::conectar();

            $album = unserialize($_SESSION["album"]);

            $consulta = "SELECT * FROM Foto WHERE Album = '".$album->getIdAlbum()."'";

            $resultado = mysqli_query($conexion, $consulta);

            $fila = mysqli_fetch_object($resultado);

            $fotos = [];

            while($fila != null)
            {
                $foto = new Foto($fila->Titulo, $fila->Fecha, $fila->Pais, $fila->Album, $fila->Fichero);
                array_push($fotos, $foto);
                $fila = mysqli_fetch_object($resultado);
            }
            $_SESSION["fotos"] = $fotos;

            GenericoBD::desconectar($conexion);


        }

        public static function bFotos(){

            $conexion=GenericoBD::conectar();

            $nomfoto = $_POST["nomfoto"];

            $consulta = "SELECT * FROM Foto WHERE Titulo LIKE '%" . $nomfoto . "%'";
            $rs = mysqli_query($conexion, $consulta);
            $fila = mysqli_fetch_object($rs);
            $busqueda = [];

            while ($fila != null)
            {
                $foto = new Foto($fila->Titulo, $fila->Fecha, $fila->Pais, $fila->Album, $fila->Fichero);
                array_push($busqueda, $foto);
                $fila = mysqli_fetch_object($rs);
            }
            $_SESSION["busqueda"] = $busqueda;


            GenericoBD::desconectar($conexion);

        }



        public static function ultimasFotos()

        {

            $conexion=GenericoBD::conectar();


            $consulta = "SELECT * FROM Foto ORDER BY Fecha DESC LIMIT 5";

            $resultado = mysqli_query($conexion, $consulta);

            $fila = mysqli_fetch_object($resultado);

            $fotos = [];

            while($fila != null)
            {
                $foto = new Foto($fila->Titulo, $fila->Fecha, $fila->Pais, $fila->Album, $fila->Fichero);
                array_push($fotos, $foto);
                $fila = mysqli_fetch_object($resultado);
            }
            $_SESSION["ultimas"] = $fotos;

            GenericoBD::desconectar($conexion);


        }



}