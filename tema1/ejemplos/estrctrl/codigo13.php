<?php
/**
 * Código 13 · 3.3 for
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   192.168.1.10
 *   192.168.1.11
 *   192.168.1.12
 *   192.168.1.13
 *   192.168.1.14
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

for ($i = 10; $i <= 14; $i++) {
    echo "192.168.1.$i\n";
}
