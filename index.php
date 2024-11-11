<?php
$username = $_GET['username'];
$password = $_GET['password'];

if ($username == "FLOFICO" && $password == "FLOFICO") {
    header('Content-Type: application/vnd.apple.mpegurl');
    readfile('mi-lista.m3u8');
} else {
    echo "Acceso denegado: credenciales incorrectas.";
}
?>
