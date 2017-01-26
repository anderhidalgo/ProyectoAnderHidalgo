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
require_once "../Modelo/LoginBD.php";


//Router para movernos entre las opciones

if(isset($_POST["entrar"])){

   $correcto = LoginBD::logueo($_POST);
   if($correcto)
   {

   }

   else
   {
    echo "error en el login";
   }

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



