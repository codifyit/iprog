<?php
$secreto = 7;
$intentos = 0;
$adivinado = false;

while (!$adivinado) {
    echo "Adivina el número (1-10): ";

    $entrada = trim(fgets(STDIN));

    // Validamos que la entrada sea un entero.
    $numero = filter_var($entrada, FILTER_VALIDATE_INT);

    if ($numero === false || $numero < 1 || $numero > 10) {
        echo "Introduce un entero entre 1 y 10.\n";
        continue;
    }

    $intentos++;

    if ($numero == $secreto) {
        $adivinado = true;
        echo "¡Correcto! Has acertado.\n";
    } elseif ($numero < $secreto) {
        echo "El número secreto es mayor.\n";
    } else {
        echo "El número secreto es menor.\n";
    }
}

echo "Número de intentos: $intentos\n";
?>