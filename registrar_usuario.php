<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$sql = "INSERT INTO users (nombre, correo, clave) VALUES ('$nombre', '$correo', '$clave')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. ¡Ahora puedes iniciar sesión!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
