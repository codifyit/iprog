<?php
$dia = 6;

switch ($dia) {
    case 1:
        $nombre = "Lunes";
        break;
    case 2:
        $nombre = "Martes";
        break;
    case 3:
        $nombre = "Miércoles";
        break;
    case 4:
        $nombre = "Jueves";
        break;
    case 5:
        $nombre = "Viernes";
        break;
    case 6:
        $nombre = "Sábado";
        break;
    case 7:
        $nombre = "Domingo";
        break;
    default:
        $nombre = "";
}

if ($nombre == "") {
    echo "Error: introduce un número del 1 al 7.";
} else {
    echo "Día seleccionado: $nombre.\n";

    if ($dia >= 1 && $dia <= 5) {
        echo "Es un día laborable.";
    } else {
        echo "Es fin de semana.";
    }
}