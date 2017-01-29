<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 12:55
 */

require_once "../Vista/formLogin.php";
require_once "../Vista/formExito.php";
require_once "../Vista/formRegistro.php";
require_once "LoginBD.php";
require_once "RegistroBD.php";


//Router para movernos entre las opciones de la pagina

if(isset($_POST["entrar"])){

    LoginBD::logueo();
}

if(isset($_POST["registrarse"])) {
    formRegistro::fRegistro();
}

if(isset($_POST["registrar"])) {
    //Llamamos a la funcion para registrarnos en RegistroBD y luego al formExito
    RegistroBD::registroUsuario();
    formExito::fExito();
}

if(isset($_POST["cancelar"])) {
    formLogin::fInicio();

}

if(isset($_POST["misdatos"])){


}



