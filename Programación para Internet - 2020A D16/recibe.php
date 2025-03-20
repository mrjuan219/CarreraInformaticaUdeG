<?php

$usuario = $_POST['user'];
$pass = $_POST['pass'];
$correo = $_POST['correo'];
$rol = $_POST['rol'];

echo "Bienvenido $usuario <br>";
echo "Su contrasenia es: $pass <br>";
echo "Su direccion de correo es: $correo <br>";
echo "Su rol es: $rol <br>";
?>
