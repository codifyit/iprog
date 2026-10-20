<?php
/**
 * Código 6 · 2.5 switch
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Página no encontrada
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$codigo = 404;
switch ($codigo) {
    case 200:
        echo "OK";
        break;
    case 404:
        echo "Página no encontrada";
        break;
    case 500:
        echo "Error interno del servidor";
        break;
    default:
        echo "Código desconocido";
}
