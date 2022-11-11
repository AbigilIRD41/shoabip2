<?php

$servername="localhost";
$username="root";
$password="";
$dbname="gala1";

if($_POST){

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO productos (nombre, descripcion, precio)
  VALUES ('".$nombre."', '".$descripcion."', '".$precio."')";
  
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
        <link rel="stylesheet" href="indexp.css"/>
        <title>CONEXION A BASE DE DATOS</title>
    </head>
    <body>

    <div class="insert">
    <form action="indexp.php" method="POST" class="aqui">
        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <br>
        Ingrese su descripcion:
        <input type="text" name="descripcion" placeholder="Ingrese su descripcion">
        <br>
        Ingrese su precio: 
        <input type="text" name="precio" placeholder="Ingrese su precio">
        <br>
        <button type="submit">GUARDAR</button>        
    </form>
    </div>

        Desea eliminar algo??
        <a href="./eliminarp.php" target="_blank">SI</a>
        <br>
        Desea modificar el nombre??
        <a href="./modificarp.php" target="_blank">SI</a>
        
    </body>
</html>