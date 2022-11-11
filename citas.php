<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$tratamiento=$_POST['tratamiento'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO citas (nombre,apellidos,correo,telefono,tratamiento,dia,hora)
VALUES ('".$nombre."', '".$apellidos."', '".$correo."', '".$telefono."', '".$tratamiento."', '".$dia."', '".$hora."')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>

<body>

<form action="citas.php" method="POST">
    Ingrese su nombre:
    <input type="text" name="nombre">
    <br>
    Ingrese sus apellidos :
    <input type="text" name="apellidos">
    <br>
    Ingrese su correo:
    <input type="text" name="correo">
    <br>
    Ingrese su telefono:
    <input type="text" name="telefono">
    <br>
    Ingrese el tratamiento:
    <input type="text" name="tratamiento">
    <br>
    Ingrese el dia :
    <input type="text" name="dia">
    <br>
    Ingrese la hora :
    <input type="text" name="hora">
    <br>
    <button type="submit">Guardar</button>
</form>

</body>
<style>
    body {
      background-color: pink;
    }
    </style>
    </head>
    <body>
    
    
    </body>
</html>