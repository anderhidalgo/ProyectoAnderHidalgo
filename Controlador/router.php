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
require_once "../Vista/formAnadirFotoAlbum.php";
require_once "../Vista/formVistaAlbum.php";
require_once "../Vista/formBusquedaFoto.php";

require_once "../Modelo/LoginBD.php";
require_once "../Modelo/RegistroBD.php";
require_once "../Modelo/BorrarBD.php";
require_once "../Modelo/ModificarBD.php";
require_once "../Modelo/AlbumBD.php";
require_once "../Modelo/FotoBD.php";

//Router para movernos entre las opciones de la pagina

if(isset($_POST["entrar"])){

    LoginBD::logueo();

}
//nos lleva al formulario de registro
elseif(isset($_POST["registrarse"])) {
    formRegistro::fRegistro();
}

elseif(isset($_POST["registrar"])) {
    //Llamamos a la funcion para registrarnos en RegistroBD y luego nos loguea
    RegistroBD::registroUsuario();
    LoginBD::logueo();
}
//nos lleva la formulario con mis datos
elseif(isset($_POST["misdatos"])){

    formDatos::Datos();

}
//pulsando el boton modificar cambia nuestros datos y nos lleva al formprincipal
elseif(isset($_POST["modificar"])){
    ModificarBD::modificar();
    header('Location: ../Vista/formPrincipal.php');
}

//nos lleva al formulario de baja de usuario
elseif(isset($_POST["baja"])){
        formBorrar::vBaja();

}
//si pulsamos la opcion de borrar en el formualrio baja nos borra y nos lleva al index
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
//en la ventana de crear album al darle al boton de crear album nos ejecuta albumbd insertaralbum y nos inserta el album
elseif (isset($_POST["crearalbum"])){

    AlbumBD::insertarAlbum();
    header('Location: ../Vista/formPrincipal.php');

}
//nos lleva al formulario de añadir foto
elseif (isset($_POST["fotonueva"])){
    formAnadirFotoAlbum::vanadirFoto();

}
//en el formulario añadir foto pulsando el boton nos ejecuta fotobd insertarfoto y nos lleva al formulario principal
elseif(isset($_POST["anadirfoto"])){
    FotoBD::insertarFoto();
    header('Location: ../Vista/formPrincipal.php');
}
//nos muestra el album y ejecuta la funcion de labumbd buscar album y si no nos lleva a principal
elseif (isset($_POST["veralbum"])){

        if(AlbumBD::buscarAlbum())
        {

            formVistaAlbum::vistaAlbum();
        }else
        {

            header('Location: ../Vista/formPrincipal.php');
        }
}
//nos lleva al formulario de buscar foto
elseif (isset($_POST["buscarfoto"])){
    formBusquedaFoto::vBFoto();
}

//opcion que nos cierra la sesion
elseif (isset($_POST["sesioncerrar"])){

    $_SESSION["usuario"] = null;
    header('Location: ../index.php');

}
//opcion que no lleva de al index (salir)
elseif(isset($_POST["cancelar"])) {
    header('Location: ../index.php');

}
//opcion para vovler a la pagina principal del proyecto
elseif(isset($_POST["volver"])) {
    header('Location: ../Vista/formPrincipal.php');

}



