<?php



function obtenerCombinacionesPrecios($productos) {
    $combinaciones = [[]];

    foreach ($productos as $producto => $precio) {
        $nuevasCombinaciones = [];
        foreach ($combinaciones as $combinacion) {
            $nuevasCombinacion = $combinacion;
            $nuevasCombinacion[$producto] = $precio;
            $nuevasCombinaciones[] = $nuevasCombinacion;
        }
        $combinaciones = array_merge($combinaciones, $nuevasCombinaciones);
    }

    return $combinaciones;
}





$catalogoProductos = [
    "cafe" => 1,
    "bravas" => 3.50,
    "zumo" => 2.20,
    "tortilla" => 3
];

$combinaciones = obtenerCombinacionesPrecios($catalogoProductos);


function sacarCombinaciones($catalogoProductos, $numeroVariableDeTickets, $precioTotalGlobal) {
    $combinaciones = obtenerCombinacionesPrecios($catalogoProductos);
    $arrayTotal = [];

    foreach ($combinaciones as $combinacion) {
        $totalCombi = 0;
        $productosSeleccionados = [];

        foreach ($combinacion as $producto => $precio) {
            $productosSeleccionados[$producto] = $precio;
            $totalCombi += $precio;
        }

        $arrayTotal[] = [
            'combinacion' => $productosSeleccionados,
            'total' => $totalCombi,
        ];

        $precioTotalGlobal -= $totalCombi;
    }

    return $arrayTotal;
}

$combinaciones=sacarCombinaciones($catalogoProductos,2,20);




function pintarTicket(array $combinaciones) {
    echo "<pre>";
    foreach ($combinaciones as $combinacion) {
        echo "*************************************************\n";
        echo "*************************************************\n";
        echo "*****            Bar los Cuñaos             *****\n";
        echo "*****          Av. de Madrid, 25            *****\n";
        echo "*****                                       *****\n";
        echo "*****  Concepto              Uds    Total   *****\n";

        foreach ($combinacion['combinacion'] as $producto => $precio) {
            $nombreProducto = str_pad($producto, 25, " ", STR_PAD_RIGHT);
            $uds = str_pad("1", 5, " ", STR_PAD_LEFT);
            $totalProducto = str_pad($precio, 8, " ", STR_PAD_LEFT);
            echo "*****  $nombreProducto  $uds  $totalProducto\n";
        }

        $totalCombinacion = str_pad($combinacion['total'], 8, " ", STR_PAD_LEFT);

        echo "*****                                       *****\n";
        echo "*****  Total Combinación: $totalCombinacion   *****\n";
        echo "*****                                       *****\n";
        echo "*****  La atendió Mariano                    *****\n";
        echo "*****  Gracias por su visita                 *****\n";
        echo "*************************************************\n";
        echo "*************************************************\n";
    }
    echo "</pre>";
}

$catalogoProductos = [
    "Zumos" => 10,
    "Bravas" => 7,
    "Ensaladillas" => 8
];
$combinaciones = sacarCombinaciones($catalogoProductos, 1, 35);
pintarTicket($combinaciones);

