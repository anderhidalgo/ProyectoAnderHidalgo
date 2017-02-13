<?php

abstract class GenericoBD {

    public static function conectar() {

        $conexion = mysqli_connect("localhost","root",null,"fotosbd") ;
        return $conexion;

    }

    public static function desconectar($conexion) {

        mysqli_close($conexion);

    }

}
