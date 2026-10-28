<?php
$numero1 = 20;
$numero2 = 5;
$operacion = "/";

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
            echo "Error: no se puede dividir entre cero.";
        }
        break;
    default:
        echo "Operación no válida.";
}