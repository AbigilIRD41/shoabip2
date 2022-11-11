<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";


$nombre=$_POST['nombre'];
$rfc=$_POST['rfc'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO provedores (nombre, rfc)
VALUES ('".$nombre."', '".$rfc."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>

<body>

<form action="insertprovedores.php" method="POST">
    Ingrese su nombre:
    <input type="text" name="nombre">
    <br>
    Ingrese su RFC:
    <input type="text" name="rfc">
    <br>
    <button type="submit">Guardar</button>
</form>

</body>
<style>
    body {
      background-color: violet;
    }
    </style>
    </head>
    <body>
    
    
    </body>
</html>