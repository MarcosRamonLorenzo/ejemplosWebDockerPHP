<?php

$titulo = "Calculo de Gastos";
include ("plantilla/encabezado.php");

$diapositivas =[
    [
        'titulo'=>'Primera diapositiva',
        'subtitulo'=>'Primera preuba  diapositiva',
        'enlace'=>'https://iespacomolla.es',
        'desc_enlace'=>'Web INsti',


    ],[

        'titulo'=>'Segunda diapositiva',
        'subtitulo'=>'Segunda preuba  diapositiva',
        'enlace'=>'https://google.es',
        'desc_enlace'=>'Web Igoogle',




    ]



];
include ("plantilla/slider.php");

require_once ("pruebaFunciones.php");

$gastosCitas[0] = ['Inma'=>200.45];
$gastosCitas[1] = ['Juan'=>10.15];
$gastosCitas[2] = ['Inma'=>315.45];

$resultado=gastosCompartidos($gastosCitas);



foreach ($resultado as $clave=>$valor){
    if ($valor>0){
        $mensajes=["El integrante de la pareja llamado $clave debe ingresar $valor"];
    }else{
        $mensajes=["El integrante de la pareja llamado $clave debe pagar ".abs($valor)];
        $mensajes[]="Este integrante es un cacas";
    }
}
$encabezado="El resultado de el preparto de gatos es:";

include ("./plantilla/mensaje.php");


include ("plantilla/pie.php");