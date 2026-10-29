<?php
//un año es bisiesto si es divisible entre 4, pero no entre 100, salvo que sea divisible entre 400
$anio = 2000;
if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)) {
    echo "El año es bisiesto.";
} else {
    echo "El año no es bisiesto.";
}
