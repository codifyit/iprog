<?php
$componentes = [
    "Teclado",
    "Ratón",
    "Monitor",
    "Impresora",
    "Disco duro"
];
 
$contador = 0;
 
echo "Componentes del inventario:\n";
 
foreach ($componentes as $componente) {
    echo "- " . $componente . "\n";
    $contador++;
}
 
echo "\nTotal de componentes: " . $contador;