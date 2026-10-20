<?php
/**
 * Código 9 · 2.7 El operador ternario
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   No hay usuarios conectados
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$conectados = 0;
echo $conectados > 0 ? "Hay $conectados usuarios" : "No hay usuarios conectados";
