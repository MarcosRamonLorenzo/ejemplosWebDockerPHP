<?php

$variable1=$_GET['numero1'];
$variable2=$_GET['numero2'];

echo "La suma de los valores es :".$variable1+$variable2;
echo "<br>";
echo "La resta de los valores es :".$variable1-$variable2;
echo "<br>";
echo "La multiplicación de los valores es :".$variable1*$variable2;
echo "<br>";
if ($variable2 == 0){

    echo "No se puede dividir entre 0";
}else{
    echo "La división de los valores es :".$variable1/$variable2;

}