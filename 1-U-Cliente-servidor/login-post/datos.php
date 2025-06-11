<?php

$usuario_guardado = "admin";
$contrasena_guardada = "123";

$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';


if ($usuario === $usuario_guardado && $contrasena === $contrasena_guardada) {
    echo "Bienvenido, $usuario.";
} else {
    echo " Usuario o contraseña incorrectas.";
}
?>
