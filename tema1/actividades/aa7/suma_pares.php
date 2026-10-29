<?php
$suma = 0;

/*for ($i = 1; $i <= 100; $i++) {
    // Si el resto de dividir entre 2 es cero, es par.
    if ($i % 2 == 0) {
        $suma = $suma + $i;
    }
}*/

$suma=0;
for ($i = 2; $i <= 100; $i+=2){
    $suma = $suma + $i;
    //echo "La suma es: $suma \n";
}
//suma+i
//0+2
//2+4
//6+6
//12+8

echo "La suma de los números pares es: $suma";
?>