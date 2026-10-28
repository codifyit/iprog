<?php
$suma = 0;
$contador = 0;

echo "Introduce números enteros (0 para terminar).\n";

$numero = (int) trim(fgets(STDIN));

while ($numero != 0) {
    $suma += $numero;
    $contador++;

    echo "Introduce otro número (0 para terminar): ";
    $numero = (int) trim(fgets(STDIN));
}

echo "\n--- RESULTADOS ---\n";
echo "Cantidad de números: $contador\n";
echo "Suma total: $suma\n";

if ($contador > 0) {
    $media = $suma / $contador;
    echo "Media: $media\n";
} else {
    echo "No se han introducido números para calcular la media.\n";
}
?>