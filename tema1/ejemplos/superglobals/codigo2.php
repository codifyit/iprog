<?php
echo "<pre>";
echo "Software del servidor: " . $_SERVER["SERVER_SOFTWARE"] . "\n";
echo "Nombre del servidor:   " . $_SERVER["SERVER_NAME"] . "\n";
echo "Puerto:                " . $_SERVER["SERVER_PORT"] . "\n";
echo "IP del cliente:        " . $_SERVER["REMOTE_ADDR"] . "\n";
echo "Método de la petición: " . $_SERVER["REQUEST_METHOD"] . "\n";
echo "URI solicitada:        " . $_SERVER["REQUEST_URI"] . "\n";
echo "Raíz de documentos:    " . $_SERVER["DOCUMENT_ROOT"] . "\n";
echo "Navegador:             " . $_SERVER["HTTP_USER_AGENT"] . "\n";
echo "</pre>";
