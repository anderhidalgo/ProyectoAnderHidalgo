<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 12:55
 */

require_once "../Vista/formLogin.php";
require_once "../Vista/formRegistro.php";
require_once "../Vista/formDatos.php";
require_once "../Vista/formBorrar.php";
require_once "../Vista/formCrearAlbum.php";
require_once "../Vista/formMiAlbum.php";


require_once "LoginBD.php";
require_once "RegistroBD.php";
require_once "BorrarBD.php";
require_once "ModificarBD.php";
require_once "AlbumBD.php";

//Router para movernos entre las opciones de la pagina

if(isset($_POST["entrar"])){

    LoginBD::logueo();

}

elseif(isset($_POST["registrarse"])) {
    formRegistro::fRegistro();
}

elseif(isset($_POST["registrar"])) {
    //Llamamos a la funcion para registrarnos en RegistroBD y luego nos loguea
    RegistroBD::registroUsuario();
    LoginBD::logueo();
}

elseif(isset($_POST["misdatos"])){

    formDatos::Datos();

}
elseif(isset($_POST["modificar"])){
    ModificarBD::modificar();
    header('Location: ../Vista/formPrincipal.php');
}

elseif(isset($_POST["baja"])){
        formBorrar::vBaja();

}

elseif (isset($_POST["borrar"])){
    BorrarBD::borrar();
    header('Location: ../index.php');

}

//Mostrar ventana Mis albumes
elseif(isset($_POST["albumes"])){
        formMiAlbum::misAlbumes();

}
//Mostrar ventana crear album
elseif (isset($_POST["nuevoalbum"])){
        formCrearAlbum::vAlbum();

}

elseif (isset($_POST["crearalbum"])){

    AlbumBD::insertarAlbum();
    header('Location: ../Vista/formPrincipal.php');

}
elseif (isset($_POST["sesioncerrar"])){

    $_SESSION["usuario"] = null;
    header('Location: ../index.php');

}

elseif(isset($_POST["cancelar"])) {
    header('Location: ../index.php');

}
elseif(isset($_POST["volver"])) {
    header('Location: ../Vista/formPrincipal.php');

}



