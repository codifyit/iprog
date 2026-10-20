<?php
$config = []; //array asociativo unidimensional sin elementos
$puerto = $config["port"] ?? 80 + 1;   
echo "puerto=$puerto";
$puerto = ($config["port"] ?? 80) + 1;

echo strlen("canción"); // 7

