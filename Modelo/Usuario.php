<?php

class Usuario
{

    private $NomUsuario;
    private $Contrasena;
    private $Email;
    private $FNacimiento;
    private $Ciudad;
    private $Pais;
    private $Foto;
    private $FRegistro;

    /**
     * Usuario constructor.
     * @param $NomUsuario
     * @param $Contrasena
     * @param $Email
     * @param $FNacimiento
     * @param $Ciudad
     * @param $Pais
     * @param $Foto
     * @param $FRegistro
     */


    //En el constructor he quitado de momento FRegistro (da un mensaje de aviso al hacer un registro de un nuevo usuario
    public function __construct($NomUsuario, $Contrasena, $Email, $FNacimiento, $Ciudad, $Pais, $Foto)
    {
        $this->NomUsuario = $NomUsuario;
        $this->Contrasena = $Contrasena;
        $this->Email = $Email;
        $this->FNacimiento = $FNacimiento;
        $this->Ciudad = $Ciudad;
        $this->Pais = $Pais;
        $this->Foto = $Foto;
    }

    /**
     * @return mixed
     */
    public function getNomUsuario()
    {
        return $this->NomUsuario;
    }

    /**
     * @param mixed $NomUsuario
     */
    public function setNomUsuario($NomUsuario)
    {
        $this->NomUsuario = $NomUsuario;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->Contrasena;
    }

    /**
     * @param mixed $Contrasena
     */
    public function setContrasena($Contrasena)
    {
        $this->Contrasena = $Contrasena;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getFNacimiento()
    {
        return $this->FNacimiento;
    }

    /**
     * @param mixed $FNacimiento
     */
    public function setFNacimiento($FNacimiento)
    {
        $this->FNacimiento = $FNacimiento;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->Ciudad;
    }

    /**
     * @param mixed $Ciudad
     */
    public function setCiudad($Ciudad)
    {
        $this->Ciudad = $Ciudad;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->Pais;
    }

    /**
     * @param mixed $Pais
     */
    public function setPais($Pais)
    {
        $this->Pais = $Pais;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->Foto;
    }

    /**
     * @param mixed $Foto
     */
    public function setFoto($Foto)
    {
        $this->Foto = $Foto;
    }

    /**
     * @return mixed
     */
    public function getFRegistro()
    {
        return $this->FRegistro;
    }

    /**
     * @param mixed $FRegistro
     */
    public function setFRegistro($FRegistro)
    {
        $this->FRegistro = $FRegistro;
    }


}






