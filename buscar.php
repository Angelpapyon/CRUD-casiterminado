<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname=$_POST["buscarDB"];
$buscar= $_POST["buscarDatos"];
$tabla=$_POST["buscarTB"];
$columna=$_POST["buscarColumna"];

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo '<p>conexion con DB exitosa</p>';
//buscar datos en la tabla

$sql ="SELECT  B.email, B.password, B.usuario
FROM $tabla B 
WHERE  $columna
Like '$buscar'
";

  $resultado= $conn ->query($sql);
if($resultado->num_rows>0){
  $key=1;
  echo "<p>se encontraron las siguientes coincidencias </p>";
  echo "<p>BASE DE DATOS: </p>".'<h2>'.$dbname.'</h2>';
  echo "<p>TABLA: </p>".'<h2>'.$tabla.'</h2>';
  echo "<p>COLUMNA: </p>".'<h2>'.$columna.'</h2>';
  echo "<p>resultados para la busqueda de: </p>".'<h2>'.$buscar.'</h2>';
  echo '<div class="cuadro">';
    while($row =$resultado->fetch_assoc()){
      /*IMPORTANTE-----------------------------------------------------como agregar css a php */
      echo '<div class="resul">'."  <span > resultado  #</span>".($key++).'<br>'.
      "NOMBRE:".$row["usuario"].'<br>'.
      "CORREO ELECTRONICO: ".$row["email"].'<br>'.
      "CONTRASEÑA: ".$row["password"].'<br>'
      .'</div>';
      '</div>';
      
    }
}else{
    echo "<h2>no hay resultados</h2>";
}

$conn->close();

?>  


</div>

</body>
</html>

