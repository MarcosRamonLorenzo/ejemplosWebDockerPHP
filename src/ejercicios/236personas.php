<?php
$personas = [
    ['nombre' => 'Mario', 'altura' => '182', 'email' => 'Mario@correo.com'],
    ['nombre' => 'Sergio', 'altura' => '125', 'email' => 'Sergio@correo.com'],
    ['nombre' => 'Marcos', 'altura' => '184', 'email' => 'Marcos@correo.com'],
    ['nombre' => 'Alberto', 'altura' => '172', 'email' => 'Alberto@correo.com'],
    ['nombre' => 'Chin Chon', 'altura' => '130', 'email' => 'Chon@correo.com'],
];

echo "<table style='border: black 1px solid'>
       <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Email</th>
        </tr>";

foreach ($personas as $clave => $valor) {
    if (is_array($valor)) {
        echo "<tr>";
        foreach ($valor as $clave1 => $valor2) {
            echo "<td> $valor2 </td> ";
        }
        echo "</tr>";
    }
}

echo "</table>";
?>
