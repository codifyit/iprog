<?php
$n = 8;

if ($n < 1) {
    echo "El número debe ser mayor o igual que 1.";
} else {
    for ($i = $n; $i >= 1; $i--) {
        echo $i . " ";
    }
}