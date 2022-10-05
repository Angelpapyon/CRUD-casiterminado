<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_POST["NomBase"];
$ntaB=$_POST["nomT"];

/*datos */
$dniT=$_POST["dniReg"];
$nomT=$_POST["nombreReg"];
$apT=$_POST["apellidoReg"];
$edT=$_POST["edadReg"];


// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "INSERT INTO $ntaB (CI,ap,edad,nombre) VALUES
('$dniT','$apT','$edT','$nomT')";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>