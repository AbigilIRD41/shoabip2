<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";

if($_POST){

$nuevo_nombre=$_POST['nuevo_nombre'];
$cual_id=$_POST['cual_id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
}

$sql = "UPDATE tintes SET nombre='".$nuevo_nombre."' WHERE id='".$cual_id."'";

if ($conn->query($sql) === TRUE) {
  echo "<strong>YA SE MODIFICO</strong>";
} else {
  echo "<strong>ERROR AL MODIFICAR</strong>" . $conn->error;
}

$conn->close();
}
?>

<html>
    <head>
        <link rel="stylesheet" href="index.css"/>
        <title>MODIFICAR</title>
    </head>
    <body>

        <div class="insert">
        <form action="modificartin.php" method="post" class="aqui">
            Ingrese el id a modificar:
                <input type="text" name="cual_id">
                <br>
            Ingrese el nuevo nombre:
                <input type="text" name="nuevo_nombre">
                <br>
                <button type="submit">GUARDAR</button>    
        </form>
        </div>
    </body>
</html>