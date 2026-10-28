<?php
$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    // Si el resto de dividir entre 2 es cero, es par.
    if ($i % 2 == 0) {
        $suma = $suma + $i;
    }
}

echo "La suma de los números pares es: $suma";
?>