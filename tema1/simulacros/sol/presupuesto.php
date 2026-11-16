<?php
/*
 * Presupuesto de equipos informáticos
 * Autor: ...
 */
 
// ---- Constantes ----
define("PRECIO_BASICO", 450);
define("PRECIO_MEDIO", 690);
define("PRECIO_AVANZADO", 980);
define("PRECIO_GARANTIA", 35);
define("IVA", 21);
define("MAX_EQUIPOS", 50);
define("EQUIPOS_POR_SEMANA", 6);
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Presupuesto de equipos</title></head>
<body>
    <!-- el HTML que sigue es el que hay que escribir, todo lo demas lo genera
     VS Code a partir de la plantilla HTML5 -->
<h1>Presupuesto de equipos</h1>
<form method="post">
    Departamento: <input type="text" name="departamento"><br>
    Número de equipos: <input type="number" name="equipos"><br>
    Tipo de equipo:
    <select name="tipo">
        <option value="basico">Básico (450 €)</option>
        <option value="medio">Medio (690 €)</option>
        <option value="avanzado">Avanzado (980 €)</option>
    </select><br>
    <label><input type="checkbox" name="garantia"> Garantía ampliada</label><br>
    <button type="submit">Calcular presupuesto</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // ---- Datos de entrada ----
    $departamento = htmlentities(trim($_POST["departamento"] ?? ""));
    $equipos      = (int) ($_POST["equipos"] ?? 0);
    $tipo         = $_POST["tipo"] ?? "";
    $garantia     = isset($_POST["garantia"]);
 
    // ---- Validación ----
    $precio = match ($tipo) {
        "basico"   => PRECIO_BASICO,
        "medio"    => PRECIO_MEDIO,
        "avanzado" => PRECIO_AVANZADO,
        default    => 0,
    };
    $errores = 0;
    if ($departamento === "") {
        echo "<p>Error: indica el departamento</p>";
        $errores++;
    }
    if ($equipos < 1 || $equipos > MAX_EQUIPOS) {
        echo "<p>Error: el número de equipos debe estar entre 1 y " . MAX_EQUIPOS . "</p>";
        $errores++;
    }
    if ($precio == 0) {
        echo "<p>Error: tipo de equipo no válido</p>";
        $errores++;
    }
 
    if ($errores == 0) {
        // ---- Proceso ----
        $subtotal = $equipos * $precio;
        if ($equipos >= 20) {
            $pct_descuento = 10;
        } elseif ($equipos >= 10) {
            $pct_descuento = 5;
        } else {
            $pct_descuento = 0;
        }
        $descuento        = $subtotal * $pct_descuento / 100;
        $importe_garantia = $garantia ? $equipos * PRECIO_GARANTIA : 0;
        $base  = $subtotal - $descuento + $importe_garantia;
        $iva   = round($base * IVA / 100, 2);
        $total = round($base + $iva, 2);
 
        // ---- Salida ----
        echo "<pre>";
        echo "Presupuesto para: $departamento\n";
        echo "Equipos: $equipos × $tipo ($precio €)\n";
        echo "Subtotal: $subtotal €\n";
        if ($descuento > 0) {
            echo "Descuento ($pct_descuento %): -$descuento €\n";
        }
        if ($garantia) {
            echo "Garantía ampliada: $importe_garantia €\n";
        }
        echo "Base imponible: $base €\n";
        echo "IVA (" . IVA . " %): $iva €\n";
        echo "TOTAL: $total €\n\n";
 
        echo "Plan de entrega:\n";
        $pendientes = $equipos;
        $semana = 1;
        while ($pendientes > 0) {
            $lote = $pendientes >= EQUIPOS_POR_SEMANA ? EQUIPOS_POR_SEMANA : $pendientes;
            echo "Semana $semana: $lote " . ($lote == 1 ? "equipo" : "equipos") . "\n";
            $pendientes -= $lote;
            $semana++;
        }
        echo "</pre>";
    }
}
?>
</body>
</html>
 
<?php
/* Parte D
 * 1. Llega como string ("14"); tras (int) es int. $garantia es bool (resultado de isset()).
 * 2. Porque el IVA es un porcentaje: la división entre 100 puede dar decimales (float).
 * 3. Porque el usuario puede cambiar el valor de la lista con el inspector del navegador
 *    o enviar los datos sin usar el formulario: nunca hay que fiarse de $_POST.
    * 4. Porque el usuario puede enviar un número negativo o mayor que 50: nunca hay que fiarse de $_POST.
    */  
