<?php
/**
 * Código 18 · 3.6 break y continue
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Opción: puerto=8080
 *   Opción: usuario=www
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$config = ["# Configuración del servidor", "puerto=8080", "", "# Usuario del servicio", "usuario=www"];
foreach ($config as $linea) {
    if ($linea === "" || $linea[0] === "#") {
        continue;
    }
    echo "Opción: $linea\n";
}
