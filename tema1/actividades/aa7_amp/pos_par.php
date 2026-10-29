<?php
$numero = -8;

// Primero comprobamos el signo.
if ($numero > 0) {
    echo "El número es positivo.\n";
} elseif ($numero < 0) {
    echo "El número es negativo.\n";
} else {
    echo "El número es cero.\n";
}

// Después comprobamos si es par o impar.
if ($numero % 2 == 0) {
    echo "El número es par.\n";
} else {
    echo "El número es impar.\n";
}