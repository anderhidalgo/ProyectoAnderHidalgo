<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 10/2/17
 * Time: 12:29
 */
require_once '../Modelo/GenericoBD.php';
require_once '../Modelo/Foto.php';

class FotoBD
{

        public static function insertarFoto(){

            $conexion=GenericoBD::conectar();

            

            $rs = mysqli_query($conexion, "INSERT INTO fotos (Titulo, Fecha, Pais, Album, Fichero) VALUES ( '" . $foto->getTitulo() . "', '" . $foto->getFecha() . "', '" . $foto->getPais() . "', '" . $foto->getAlbum() . "', '" . $foto->getFichero() . "')");


            GenericoBD::desconectar($conexion);

        }


        public static function buscarFoto(){


            $conexion=GenericoBD::conectar();




            GenericoBD::desconectar($conexion);



        }

        public static function ultimasFotos()

        {

            $conexion=GenericoBD::conectar();




            GenericoBD::desconectar($conexion);


        }



}