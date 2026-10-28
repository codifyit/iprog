<?php
$contrasenaCorrecta = "ASIR2026";
$contrasena = "";

do {
    echo "Introduce la contraseña: ";

    $contrasena = trim(fgets(STDIN));

    if ($contrasena !== $contrasenaCorrecta) {
        echo "Contraseña incorrecta. Inténtalo de nuevo.\n";
    }

} while ($contrasena !== $contrasenaCorrecta);

echo "Acceso concedido.\n";
?>