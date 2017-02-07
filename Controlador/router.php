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

require_once "LoginBD.php";
require_once "RegistroBD.php";
require_once "BorrarBD.php";
require_once "ModificarBD.php";

//Router para movernos entre las opciones de la pagina

if(isset($_POST["entrar"])){

    LoginBD::logueo();
    require_once "../Vista/formPrincipal.php";
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
    if(BorrarBD::borrar()){
        echo "borrado";
        header('Location: ../index.php');
    }else{
        echo "No borrado";
    }

}

elseif(isset($_POST["cancelar"])) {
    header('Location: ../index.php');

}



