<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:00
 */
class Foto
{

    private $Titulo;
    private $Fecha;
    private $Pais;
    private $Album;
    private $Fichero;
    private $FRegistro;

    /**
     * Foto constructor.
     * @param $Titulo
     * @param $Fecha
     * @param $Pais
     * @param $Album
     * @param $Fichero
     * @param $FRegistro
     */
    public function __construct($Titulo, $Fecha, $Pais, $Album, $Fichero, $FRegistro)
    {
        $this->Titulo = $Titulo;
        $this->Fecha = $Fecha;
        $this->Pais = $Pais;
        $this->Album = $Album;
        $this->Fichero = $Fichero;
        $this->FRegistro = $FRegistro;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }

    /**
     * @param mixed $Titulo
     */
    public function setTitulo($Titulo)
    {
        $this->Titulo = $Titulo;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
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
    public function getAlbum()
    {
        return $this->Album;
    }

    /**
     * @param mixed $Album
     */
    public function setAlbum($Album)
    {
        $this->Album = $Album;
    }

    /**
     * @return mixed
     */
    public function getFichero()
    {
        return $this->Fichero;
    }

    /**
     * @param mixed $Fichero
     */
    public function setFichero($Fichero)
    {
        $this->Fichero = $Fichero;
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