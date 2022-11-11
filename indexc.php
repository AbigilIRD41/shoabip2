<?php

$servername="localhost";
$username="root";
$password="";
$dbname="gala1";

if($_POST){

$nombre=$_POST['nombre'];
$edad=$_POST['precio'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO cortes (nombre, precio)
  VALUES ('".$nombre."', '".$precio."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<strong>EXITO</strong>";
  } else {
    echo "<strong>ERROR</strong>" . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>

<html>
    <head>
        <link rel="stylesheet" href="indexc.css"/>
        <title>CONEXION A BASE DE DATOS</title>
    </head>
    <body>

    <div class="insert">
    <form action="indexc.php" method="POST" class="aqui">
        Ingrese nombre:
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <br>
        Ingrese corte:
        <input type="text" name="precio" placeholder="Ingrese su precio">
        <br>
     
        <button type="submit">GUARDAR</button>        
    </form>
    </div>

        Desea eliminar algo??
        <a href="./eliminarc.php" target="_blank">SI</a>
        <br>
        Desea modificar el nombre??
        <a href="./modificarc.php" target="_blank">SI</a>
        
    </body>
</html>