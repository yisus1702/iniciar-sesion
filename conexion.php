<?php

$servername = "localhost";
$username = "id22094043_yisus";
$clave = "P1z4rro-1702";
$dbname = "id22094043_users";

$conn = new mysqli($servername, $username, $clave, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
