<?php
// URL: http://localhost/ejemplos/saludo.php?nombre=Ana&curso=2
echo "<pre>";
var_dump($_GET);
echo "</pre>";
$nombre=htmlentities($_GET["nombre"] ?? "invitado");
$curso=(int)($_GET["curso"] ?? 1);
echo "Hola $nombre, estás en $curso.º curso";
echo (int)($_GET["curso"]) + 2;
