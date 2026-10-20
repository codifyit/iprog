<?php
/**
 * Código 12 · 3.2 do...while
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   do...while: 10
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$i = 10;
while ($i < 5) {
    echo "while: $i\n";
}
do {
    echo "do...while: $i\n";
} while ($i < 5);
