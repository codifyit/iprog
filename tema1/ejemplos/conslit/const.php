<?php
define("UMBRAL_AVISO", 75);
define("UMBRAL_CRITICO", 90);
$uso_disco = 82;
$estado = $uso_disco >= UMBRAL_CRITICO ? "CRÍTICO"
    : ($uso_disco >= UMBRAL_AVISO ? "AVISO" : "OK");
echo "Uso del disco: $uso_disco % → $estado";
