<?php

$usuario_guardado = "lana";
$contrasena_guardada = "12345";

$usuario = $_GET['usuario'] ?? '';
$contrasena = $_GET['contrasena'] ?? '';

if ($usuario === $usuario_guardado && $contrasena === $contrasena_guardada) {
    echo " Bienvenido, $usuario.";
} else {
    echo " Usuario o contraseña incorrectas.";
}
?>
