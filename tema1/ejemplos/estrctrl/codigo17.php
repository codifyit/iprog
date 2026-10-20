<?php
/**
 * Código 17 · 3.6 break y continue
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Primer puerto libre: 8082
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$puertos = [8080 => "ocupado", 8081 => "ocupado", 8082 => "libre", 8083 => "libre"];
$elegido = null;
foreach ($puertos as $puerto => $estado) {
    if ($estado === "libre") {
        $elegido = $puerto;
        break;
    }
}
echo "Primer puerto libre: " . ($elegido ?? "ninguno");
