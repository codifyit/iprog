<?php
$a = 12;
$b = 45;
$c = 7;

$mayor = $a;            // suponemos que la mayor es $a
if ($b > $mayor) {
    $mayor = $b;        // si $b es mayor, la sustituye
}
if ($c > $mayor) {
    $mayor = $c;        // si $c es mayor, la sustituye
}
echo "El mayor es $mayor";