<?php

namespace src\Videoclub;

include_once ("Soporte.php");

use src\Videoclub\Soporte;

class Cliente
{
public string $nombre;
private int $numero;
private array $soportesAlquilados;
private int $numSoportesAlquilados;
private int $maxAlquilerConcurrente;

    public function __construct($numero,$nombre,$maxAlquilerConcurrente)
    {
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->maxAlquilerConcurrente=$maxAlquilerConcurrente;
        $this->numSoportesAlquilados=0;
        $this->soportesAlquilados=[];
    }

    public  function alquilar(Soporte $soporte):void{
        if (count($this->soportesAlquilados)>$this->maxAlquilerConcurrente){
            echo "No puedes alquilar mas ratón";
        }else{
            $this->soportesAlquilados[]=$soporte;
            $this->numSoportesAlquilados++;
        }
    }

    public function tieneAlquilado(Soporte $soporte):bool{
        if ($this->numSoportesAlquilados==0) return false;

        foreach ($this->soportesAlquilados as $clave=>$valor){
                if ($valor==$soporte){
                    return true;
                }
        }
        return false;
    }


    public function devolver(int $numSoporte):void{
        if ($this->numSoportesAlquilados<$numSoporte){
            echo "No puedes devolverlo ";
        }else{

            unset($this->soportesAlquilados[$numSoporte]);
            echo "El soporte devuelto ha sido el número : $numSoporte " ;
            $this->soportesAlquilados--;
        }
    }


    public function listaAlquileres():array{
        echo "Lista de Soportes Alquilados<br>";
        foreach ($this->soportesAlquilados as $clave=>$valor){
            echo "Soporte".($clave+1).":". $valor->mostrarResumen()."<br>";
        }
        return $this->soportesAlquilados;
    }

    public function muestraResumen():void{
        echo "Nombre : $this->nombre <br>";
        echo "Número : $this->numero <br>";
        echo "Número de Soprtes alquilados : $this->numSoportesAlquilados <br>";
        echo "Lista de Soportes Alquilados<br>";
        foreach ($this->soportesAlquilados as $clave=>$valor){
            echo "Soporte".($clave+1).":". $valor->mostrarResumen()."<br>";
        }
        echo "Máximos soportes que puede alquilar : $this->maxAlquilerConcurrente <br>";
    }


}
