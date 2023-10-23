<?php

namespace src\Videoclub;

class CintaVideo extends Soporte
{

    private int $duracion;

    public function __construct($titulo, $numero, $precio,$duracion)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->duracion=$duracion;

    }

    public function muestraResumen()
    {
         parent::muestraResumen();
        echo " Duracion:".$this->duracion;
    }


}