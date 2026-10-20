<?php
/**
 * Código 15 · 3.4 foreach
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Comprobando web01
 *   Comprobando db01
 *   Comprobando mail01
 *   ana usa 2.5 GB
 *   luis usa 9.8 GB
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$servidores = ["web01", "db01", "mail01"];
foreach ($servidores as $servidor) {
    echo "Comprobando $servidor\n";
}
$cuotas = ["ana" => 2.5, "luis" => 9.8];
foreach ($cuotas as $usuario => $gb) {
    echo "$usuario usa $gb GB\n";
}
