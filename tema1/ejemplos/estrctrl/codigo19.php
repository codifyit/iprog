<?php
/**
 * Código 19 · Del problema al programa
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Aviso: luis supera el límite (9.8 GB)
 *   Aviso: eva supera el límite (5.1 GB)
 *   Total usado: 18.1 GB
 *   Usuarios que superan el límite: 2
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

define("LIMITE_GB", 5);
$cuotas = ["ana" => 2.5, "luis" => 9.8, "eva" => 5.1, "raul" => 0.7];
$total = 0;
$superan = 0;
foreach ($cuotas as $usuario => $gb) {
    $total += $gb;
    if ($gb > LIMITE_GB) {
        echo "Aviso: $usuario supera el límite ($gb GB)\n";
        $superan++;
    }
}
echo "Total usado: $total GB\n";
echo "Usuarios que superan el límite: $superan";
