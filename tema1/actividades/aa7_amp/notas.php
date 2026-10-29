<?php
$nota = 7;

if ($nota < 0 || $nota > 10) {
    echo "Nota no válida.\n";
} else {
    if ($nota < 5) {
        echo "Suspenso.\n";
    } elseif ($nota < 7) {
        echo "Aprobado.\n";
    } elseif ($nota < 9) {
        echo "Notable.\n";
    } else {
        echo "Sobresaliente.\n";
    }

    if ($nota == 5) {
        echo "Has alcanzado el aprobado justo.\n";
    } elseif ($nota == 7) {
        echo "Has alcanzado el notable justo.\n";
    } elseif ($nota == 9) {
        echo "Has alcanzado el sobresaliente justo.\n";
    }
}