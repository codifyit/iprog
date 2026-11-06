<form method="post">
    Usuario: <input type="text" name="usuario"><br>
    Edad: <input type="number" name="edad"><br>
    <button type="submit">Enviar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario=htmlentities(trim($_POST["usuario"] ?? ""));
    $edad=(int)($_POST["edad"] ?? 0);


    if ($usuario==="")
echo"Error:el usuario es obligatorio";
    elseif($edad < 18) {
        echo "Error: $usuario, debes ser mayor de edad";
    } else {
        echo "Alta correcta: $usuario($edad años)";
    }
}
?>
