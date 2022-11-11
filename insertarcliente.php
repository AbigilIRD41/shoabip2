<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clientes (nombre, correo)
VALUES ('".$nombre."','".$correo."')";

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
      <center>
    <form action="insertarcliente.php" method="post">
      
        ingrese su nombre:
        <input type="text" name="nombre">
        <br>
        ingrese su correo:
        <input type="text" name="correo">
        <br>
        <button type="submit">GUARDAR</button>
    
    </from>
</center>


</style>
    </body>

    <body style="background-color:powderblue;">

</body>
    </html>