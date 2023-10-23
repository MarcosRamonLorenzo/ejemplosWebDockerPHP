<?php

namespace src\Videoclub;

class Soporte
{

 public string $titulo;
 protected string $numero;
 private string $precio;

    public function __construct($titulo,$numero,$precio)
    {
        $this->titulo=$titulo;
        $this->numero=$numero;
        $this->precio=$precio;
    }

    public function muestraResumen()
    {
        echo "Título: " . $this->titulo . ", Número: " . $this->numero . ", Precio: $" . $this->precio;
    }

    public function __toString(): string
    {
        return "Título: " . $this->titulo . ", Número: " . $this->numero . ", Precio: $" . $this->precio;
    }


}