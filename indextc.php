<?php

$servername="localhost";
$username="root";
$password="";
$dbname="gala1";

if($_POST){

$producto=$_POST['producto'];
$precio=$_POST['precio'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO tcabello (producto,precio)
  VALUES ('".$producto."', '".$precio."')";
  
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
        <link rel="stylesheet" href="indextc.css"/>
        <title>CONEXION A BASE DE DATOS</title>
    </head>
    <body>

    <div class="insert">
    <form action="indextc.php" method="POST" class="aqui">
        Ingrese su tratamiento:
        <input type="text" name="tratamiento" placeholder="Ingrese su tratamiento">
        <br>
        Ingrese su precio:
        <input type="text" name="precio" placeholder="Ingrese su precio">
        <br>
      
        <button type="submit">GUARDAR</button>        
    </form>
    </div>

        Desea eliminar algo??
        <a href="./eliminartc.php" target="_blank">claro</a>
        <br>
        Desea modificar el nombre??
        <a href="./modificartratamiento.php" target="_blank">claro</a>
        
    </body>
</html>