<?php
// Leer el cuerpo de la solicitud
$raw = file_get_contents("php://input");
$data = json_decode($raw, true);

// Responder con los datos recibidos
echo "ok" . "\n";
echo "Usuario Nuevo: " . $data["usuario"] . "\n";
echo "Password: " . $data["password"] . "\n";
?>
