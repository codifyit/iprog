<?php
/**
 * Código 1 · 1. Programación estructurada
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Libre: 180 GB (64 % usado)
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$total_gb = 500;
$usado_gb = 320;
$libre_gb = $total_gb - $usado_gb;
$porcentaje = $usado_gb * 100 / $total_gb;
echo "Libre: $libre_gb GB ($porcentaje % usado)";
