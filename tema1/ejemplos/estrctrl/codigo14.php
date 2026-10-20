<?php
/**
 * Código 14 · 3.3 for
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Los logs ocupan 297 MB
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$logs_mb = [12, 48, 7, 230];
$total = 0;
for ($i = 0; $i < count($logs_mb); $i++) {
    $total += $logs_mb[$i];
}
echo "Los logs ocupan $total MB";
