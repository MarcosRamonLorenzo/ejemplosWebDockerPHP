<?php

namespace src\Videoclub;

class Juego extends Soporte
{
    public string $consola;
    private int $minNumJugadores;
    private int $maxNumJugadores;

    public function __construct($titulo, $numero, $precio,$consola,$minNumJugadores,$maxNumJugadores)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->consola=$consola;
        $this->minNumJugadores=$minNumJugadores;
        $this->maxNumJugadores=$maxNumJugadores;
    }

    public function muestraResumen()
    {
        parent::muestraResumen();
        echo "Consola: "."Numero de jugadores mínimo: ".$this->minNumJugadores.$this->consola."Numero de jugadores máximo: ".$this->maxNumJugadores;
    }

    public function muestraJugadoresPosibles(){
        echo "El numero máximo de jugadores posibles son :$this->maxNumJugadores ";
    }


}

