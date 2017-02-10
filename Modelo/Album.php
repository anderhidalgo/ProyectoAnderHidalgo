<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:03
 */
class Album
{
    private $IdAlbum;
    private $Titulo;
    private $Descripcion;
    private $Fecha;
    private $Pais;
    private $Usuario;

    /**
     * Album constructor.
     * @param $IdAlbum
     * @param $Titulo
     * @param $Descripcion
     * @param $Fecha
     * @param $Pais
     * @param $Usuario
     */

    public function __construct($Titulo, $Descripcion, $Fecha, $Pais, $Usuario)
    {
        $this->Titulo = $Titulo;
        $this->Descripcion = $Descripcion;
        $this->Fecha = $Fecha;
        $this->Pais = $Pais;
        $this->Usuario = $Usuario;
    }

    /**
     * @return mixed
     */
    public function getIdAlbum()
    {
        return $this->IdAlbum;
    }

    /**
     * @param mixed $IdAlbum
     */
    public function setIdAlbum($IdAlbum)
    {
        $this->IdAlbum = $IdAlbum;
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
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
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
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * @param mixed $Usuario
     */
    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;
    }



}