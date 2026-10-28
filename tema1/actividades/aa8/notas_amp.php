<?php
$alumnos = [
    ["nombre" => "Ana", "nota" => 8],
    ["nombre" => "Luis", "nota" => 4],
    ["nombre" => "Marta", "nota" => 6],
    ["nombre" => "Pablo", "nota" => 9]
];

$aprobados = 0;
$suspendidos = 0;

echo "Notas del grupo:\n";

foreach ($alumnos as $alumno) {
    echo $alumno["nombre"] . " - Nota: "
        . $alumno["nota"] . " - ";

    if ($alumno["nota"] >= 5) {
        echo "Aprobado\n";
        $aprobados++;
    } else {
        echo "Suspenso\n";
        $suspendidos++;
    }
}

echo "\nResumen de resultados:\n";
echo "Número de aprobados: " . $aprobados . "\n";
echo "Número de suspensos: " . $suspendidos . "\n";
?>