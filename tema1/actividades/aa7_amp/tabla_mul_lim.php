<?php
echo "Introduce el número de la tabla: ";
$numero = (int) trim(fgets(STDIN));

echo "¿Hasta qué número quieres calcularla? ";
//la función trim() elimina los espacios en blanco al principio y al final de la cadena, y fgets() 
//lee una línea desde la entrada estándar (STDIN). Luego, convertimos la entrada a un número entero usando (int).

//la función fgets() se utiliza para leer una línea de entrada desde la entrada estándar (STDIN), 
//que generalmente es el teclado. La función trim() se utiliza para eliminar cualquier espacio en blanco 
//al principio y al final de la cadena leída. Esto es útil para asegurarse de que no haya espacios adicionales 
//que puedan afectar la conversión a un número entero. Finalmente, la conversión a entero se realiza utilizando (int), 
//lo que garantiza que la variable $limite contenga un valor numérico adecuado para el bucle for que sigue.
$limite = (int) trim(fgets(STDIN));

if ($limite < 1) {
    echo "El límite debe ser mayor o igual que 1.\n";
} else {
    for ($i = 1; $i <= $limite; $i++) {
        $resultado = $numero * $i;

        echo "$numero x $i = $resultado\n";
    }
}