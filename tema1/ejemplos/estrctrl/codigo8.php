<?php
/**
 * Código 8 · 2.6 match (PHP 8)
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Error del servidor
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$codigo = 500;
$mensaje = match ($codigo) {
    200      => "OK",
    404      => "Página no encontrada",
    500, 503 => "Error del servidor",
    default  => "Código desconocido",
};
echo $mensaje;
