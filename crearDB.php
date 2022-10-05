<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = $_POST["NomBD"];

// Creando la conexion
$conn = new mysqli($servername, $username, $password);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo  "Conexión realizada";

// Consulta para crear la base de datos
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada correctamente";
} else {
  echo "Error al crear: " . $conn->error;
}

$conn->close();
?>