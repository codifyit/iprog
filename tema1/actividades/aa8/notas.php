<?php
$alumnos = [
    ["nombre" => "Ana", "nota" => 8],
    ["nombre" => "Luis", "nota" => 4],
    ["nombre" => "Marta", "nota" => 6],
    ["nombre" => "Pablo", "nota" => 9]
];
 
echo "Notas del grupo:\n";
 
foreach ($alumnos as $alumno) {
    echo $alumno["nombre"] . " - Nota: " . $alumno["nota"] . " - ";
 
    if ($alumno["nota"] >= 5) {
        echo "Aprobado";
    } else {
        echo "Suspenso";
    }
 
    echo "\n";
}
