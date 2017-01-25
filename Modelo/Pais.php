<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:02
 */

class Pais
{

    private $NomPais;

    /**
     * Pais constructor.
     * @param $NomPais
     */
    public function __construct($NomPais)
    {
        $this->NomPais = $NomPais;
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
