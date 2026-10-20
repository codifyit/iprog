<?php
/**
 * Código 20 · 5.3 Errores frecuentes
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Mayor que 5
 *   Vuelta 3
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$x = 3;
if ($x > 5); {
    echo "Mayor que 5\n";
}
for ($i = 0; $i < 3; $i++); {
    echo "Vuelta $i\n";
}
