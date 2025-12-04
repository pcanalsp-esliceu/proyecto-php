<?php

echo "<prep>";
echo "recibiendo datos del formulario";
$_SERVER["REQUEST_METHOD"];
echo "<prep>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    

    echo "Nombre: " . $nombre . "<br>";
    echo "Teléfono: " . $telefono . "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
} else {
    echo "Error: método POST requerido.";
}




