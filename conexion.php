<?php
$servername = "localhost";
$username = "root";
$password = "";


// Creando la conexion
$conn = new mysqli($servername, $username, $password);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo 'conexion exitosa';

?>