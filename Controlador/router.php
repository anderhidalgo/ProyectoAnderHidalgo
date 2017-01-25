<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 12:55
 */

require_once "../Vista/formLogin.php";
require_once "../Vista/formExito.php";
require_once  "../Vista/formRegistro.php";


if(isset($_POST["enviar"])){

}

if(isset($_POST["registrarse"])){
    formRegistro::fRegistro();
}

if(isset($_POST["Registrar"])){
    formExito::fExito();
}

if(isset($_POST["cancelar"])){
    formLogin::fInicio();

}



