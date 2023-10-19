<?php

include_once "Soporte.php";
include_once("CintaVideo.php");

use src\Videoclub\Soporte;


$soporte=new Soporte("Lord of the rings","23",4);

$soporte->muestraResumen();
