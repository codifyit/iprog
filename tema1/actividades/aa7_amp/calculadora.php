<?php
$numero1 = 2;
$numero2 = 3;
$operacion = "**";

switch ($operacion) {
    case "+":
        echo $numero1 + $numero2;
        break;

    case "-":
        echo $numero1 - $numero2;
        break;

    case "*":
        echo $numero1 * $numero2;
        break;

    case "/":
        if ($numero2 != 0) {
            echo $numero1 / $numero2;
        } else {
            echo "Error: división entre cero.";
        }
        break;

    case "**":
        echo $numero1 ** $numero2;
        break;

    default:
        echo "Operación no válida.";
}