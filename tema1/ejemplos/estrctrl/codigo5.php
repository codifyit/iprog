<?php
/**
 * Código 5 · 2.4 Condicionales anidados
 * Documento: Estructuras de control en PHP · 2º ASIR · Introducción a la programación
 *
 * Salida esperada:
 *   Acceso denegado: root no puede entrar por SSH
 */

// Muestra la salida como texto plano para que los saltos de línea se vean en el navegador
header("Content-Type: text/plain; charset=utf-8");

$usuario = "root";
$remoto  = true;
if ($usuario === "root") {
    if ($remoto) {
        echo "Acceso denegado: root no puede entrar por SSH";
    } else {
        echo "Acceso local de root permitido";
    }
} else {
    echo "Acceso permitido para $usuario";
}
