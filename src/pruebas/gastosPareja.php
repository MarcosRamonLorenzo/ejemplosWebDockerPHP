<?php

$titulo = "Calculo de Gastos";
include ("plantilla/encabezado.php");

include_once("pruebaFunciones.php");

$gastosCitas[0] = ['Inma'=>200.45];
$gastosCitas[1] = ['Juan'=>10.15];
$gastosCitas[2] = ['Inma'=>315.45];

$resultado=gastosCompartidos($gastosCitas);

$mensaje="";

foreach ($resultado as $clave=>$valor){
    if ($valor>0){
        $mensaje= "El integrante de la pareja llamado $clave debe ingresar $valor<br>";
    }else{
        $mensaje= "El integrante de la pareja llamado $clave debe pagar ".abs($valor)."<br>";
    }
}
$encabezado="El resultado de el preparto de gatos es:";

include ("./plantilla/mensaje.php");

include ("plantilla/pie.php");