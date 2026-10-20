<?php
/**
 * Código 3 · 2.2 if...else: selección doble
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Apache está parado: hay que iniciarlo
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$servicio = "parado";
if ($servicio === "activo") {
    echo "Apache funciona correctamente";
} else {
    echo "Apache está parado: hay que iniciarlo";
}
