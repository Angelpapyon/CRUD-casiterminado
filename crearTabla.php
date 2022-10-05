<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_POST["NomBase"];

$nomTabla=$_POST["nombretabla"];
$id= $_POST["id"];
$nom= $_POST["nombre"];
$ap= $_POST["apellido"];
$ed= $_POST["edad"];



// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
/* -UNSIGNED AUTO_INCREMENT ------------------------PRIMARY KEY-------------------- */
$sql = "CREATE TABLE $nomTabla (
   $id INT  NOT NULL, 
   $nom VARCHAR(12) NOT NULL,
   $ap VARCHAR(12)NOT NULL,
   $ed INT NOT NULL
   
)";


if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>