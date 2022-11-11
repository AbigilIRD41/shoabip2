<?php

$servername="localhost";
$username="root";
$password="";
$dbname="gala1";

if($_POST){

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$tratamiento=$_POST['tratamiento'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO citas (nombre, apellidos,correo,telefono,tratamiento,dia,hora)
  VALUES ('".$nombre."', '".$apellidos." ,'".$correo.",'".$telefono.",'".$tratamiento.",'".$dia.",'".$hora.")";
  
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
        <link rel="stylesheet" href="indexci.css"/>
        <title>CONEXION A BASE DE DATOS</title>
    </head>
    <body>

    <div class="insert">
    <form action="indexci.php" method="POST" class="aqui">
    Ingrese nombre:
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <br>
        Ingrese apellidos:
        <input type="text" name="apellidos" placeholder="Ingrese su apellidos">
        <br>
        Ingrese correo:
        <input type="text" name="correo" placeholder="Ingrese su correo">
        <br>
        Ingrese telefono:
        <input type="text" name="telefono" placeholder="Ingrese su telefono">
        <br>
        Ingrese tratamiento:
        <input type="text" name="tratamiento" placeholder="Ingrese su tratamiento">
        <br>
        Ingrese dia:
        <input type="text" name="dia" placeholder="Ingrese su dia">
        <br>
        Ingrese hora:
        <input type="text" name="hora" placeholder="Ingrese su hora">
        <br>
     
     
        <button type="submit">GUARDAR</button>        
    </form>
    </div>

        Desea eliminar algo??
        <a href="./eliminarci.php" target="_blank">SI</a>
        <br>
        Desea modificar el nombre??
        <a href="./modificarci.php" target="_blank">SI</a>
        
    </body>
</html>