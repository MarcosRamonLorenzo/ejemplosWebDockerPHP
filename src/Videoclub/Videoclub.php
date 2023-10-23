<?php

namespace Videoclub;

class Videoclub
{
private string $nombre;
private array $productos;
private int $numProductos;
private array $socios;
private int $numSocios;

    /**
     * @param string $nombre
     */
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->productos = [];
        $this->socios = [];
        $this->numProductos=0;
        $this->numSocios=0;

    }

    /**
     * @param Soporte $soporte
     * @return $this
     */
    public function incluirProducto(Soporte $soporte):Videoclub{
        $this->numProductos[]=$soporte;
        $this->numProductos++;
        return $this;
    }
    public function incluirCintaVideo($titulo,$precio,$duración){
        $cintaVideo = new CintaVideo($titulo,$this->numProductos+1,$precio,$duración);
        return $this->incluirProducto($cintaVideo);
    }




}