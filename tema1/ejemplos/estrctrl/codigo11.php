<?php
/**
 * Código 11 · 3.1 while
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Intento 1 fallido
 *   Intento 2 fallido
 *   Conectado en el intento 3
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$respuestas = [false, false, true];   // resultado de cada intento de conexión
$intento = 0;
while (!$respuestas[$intento]) {
    echo "Intento " . ($intento + 1) . " fallido\n";
    $intento++;
}
echo "Conectado en el intento " . ($intento + 1);
