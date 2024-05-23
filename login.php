<?php

include('conexion.php');

$correo = $_POST['correo'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM users WHERE correo = '$correo' AND clave = '$clave'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso. ¡Bienvenido!";
} else {
    echo "Correo electrónico o contraseña incorrectos. Intenta de nuevo.";
}

$conn->close();
?>
