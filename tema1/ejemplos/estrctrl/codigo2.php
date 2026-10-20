<?php
/**
 * Código 2 · 2.1 if: selección simple
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   ALERTA: disco casi lleno
 *   Comprobación terminada
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$uso_disco = 93;
if ($uso_disco > 90) {
    echo "ALERTA: disco casi lleno\n";
}
echo "Comprobación terminada";
