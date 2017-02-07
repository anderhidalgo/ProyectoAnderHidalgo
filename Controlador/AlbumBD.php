<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 7/2/17
 * Time: 12:11
 */
require_once '../Modelo/GenericoBD.php';
require_once '../Modelo/Usuario.php';

class AlbumBD
{

    public static function insertarAlbum(){

        $conexion=GenericoBD::conectar();



        GenericoBD::desconectar($conexion);



    }





}