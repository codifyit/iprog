<?php
/**
 * Código 4 · 2.3 if...elseif...else: selección múltiple
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Uso de CPU 78 %: AVISO
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$cpu = 78;
if ($cpu >= 90) {
    $estado = "CRÍTICO";
} elseif ($cpu >= 70) {
    $estado = "AVISO";
} else {
    $estado = "OK";
}
echo "Uso de CPU $cpu %: $estado";
