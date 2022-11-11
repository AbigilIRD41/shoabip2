<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO productos (nombre,descripcion,precio)
VALUES ('".$nombre."','".$descripcion."','".$precio."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<hhml>
    <head></head>
    <body>
    <form action="productos.php" method="post">
        ingrese el nombre del producto:
        <input type="text" name="nombre">
        <br>
        ingrese la descripcion:
        <input type="text" name="descripcion">
        <br>
        ingrese precio:
        <input type="text" name="precio">
        <br>
        <button type="submit">GUARDAR</button>
    
    </from>
    </body>
    </html>