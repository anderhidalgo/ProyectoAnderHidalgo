<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:02
 */

class Pais
{
    private $idPais;
    private $NomPais;

    /**
     * Pais constructor.
     * @param $idPais
     * @param $NomPais
     */
    public function __construct($idPais, $NomPais)
    {
        $this->idPais = $idPais;
        $this->NomPais = $NomPais;
    }

    /**
     * @return mixed
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * @param mixed $idPais
     */
    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;
    }

    /**
     * @return mixed
     */
    public function getNomPais()
    {
        return $this->NomPais;
    }

    /**
     * @param mixed $NomPais
     */
    public function setNomPais($NomPais)
    {
        $this->NomPais = $NomPais;
    }


}
