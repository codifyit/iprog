<?php
//la función rand() genera un número aleatorio entre 1 y 10, que se almacena en la variable $secreto.
$secreto = rand(1, 10);
$intentos = 0;
$adivinado = false;

while (!$adivinado) {
    echo "Adivina el número (1-10): ";
    $entrada = trim(fgets(STDIN));

    $numero = filter_var($entrada, FILTER_VALIDATE_INT);

    if ($numero === false || $numero < 1 || $numero > 10) {
        echo "Introduce un entero entre 1 y 10.\n";
        continue;
    }

    $intentos++;

    if ($numero < $secreto) {
        echo "El número secreto es mayor.\n";
    } elseif ($numero > $secreto) {
        echo "El número secreto es menor.\n";
    } else {
        $adivinado = true;
        echo "¡Enhorabuena! Has acertado.\n";
    }
}

echo "Intentos realizados: $intentos\n";