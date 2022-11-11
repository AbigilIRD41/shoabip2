<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";


$nombre=$_POST['nombre'];
$precio=$_POST['precio'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO novedades (nombre, precio)
VALUES ('".$nombre."', '".$precio."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>

<body>

<form action="novedades.php" method="POST">
    novedades nombre:
    <input type="text" name="nombre">
    <br>
    Ingrese su precio:
    <input type="text" name="precio">
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