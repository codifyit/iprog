<?php
/**
 * Código 7 · 2.5 switch
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Hoy toca copia completa
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$dia = "sábado";
switch ($dia) {
    case "sábado":
    case "domingo":
        $copia = "completa";
        break;
    default:
        $copia = "incremental";
}
echo "Hoy toca copia $copia";
