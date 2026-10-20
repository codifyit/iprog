<?php
/**
 * Código 10 · 3.1 while
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Reinicio en 5...
 *   Reinicio en 4...
 *   Reinicio en 3...
 *   Reinicio en 2...
 *   Reinicio en 1...
 *   Reiniciando servidor
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$segundos = 5;
while ($segundos > 0) {
    echo "Reinicio en $segundos...\n";
    $segundos--;
}
echo "Reiniciando servidor";
