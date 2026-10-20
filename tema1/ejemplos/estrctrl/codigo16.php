<?php
/**
 * Código 16 · 3.5 Bucles anidados
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   F1P1 F1P2 F1P3 F1P4
 *   F2P1 F2P2 F2P3 F2P4
 *   F3P1 F3P2 F3P3 F3P4
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

for ($fila = 1; $fila <= 3; $fila++) {
    for ($puesto = 1; $puesto <= 4; $puesto++) {
        echo "F{$fila}P{$puesto} ";
    }
    echo "\n";
}
