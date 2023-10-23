<?php

namespace src\Videoclub;

class Dvd extends Soporte
{
    public array $idiomas;
    private  string $formatoPantalla;

    public function __construct($titulo, $numero, $precio,$formatoPantalla,$idiomas)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->formatoPantalla=$formatoPantalla;
        $this->idiomas=$idiomas;
    }

    public function muestraResumen()
    {
        parent::muestraResumen();
        echo "Idiomas:".$this->idiomas."Formato Pantalla:".$this->formatoPantalla;
    }


}