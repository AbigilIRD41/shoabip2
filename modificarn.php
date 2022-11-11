<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";

if($_POST){
 $nuevo_id=$_POST['nuevo_id'];
$nuevo_nombre=$_POST['nuevo_nombre'];
$nuevo_precio=$_POST['nuevo_precio'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
}

$sql = "UPDATE novedades SET nombre='".$nuevo_nombre."' WHERE id='".$nuevo_id."'";

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
        <link rel="stylesheet" href="indexn.css"/>
        <title>MODIFICAR</title>
    </head>
    <body>

        <div class="insert">
        <form action="modificarn.php" method="post" class="aqui">
        Ingrese el nuevo id:
                <input type="text" name="nuevo_id">
                <br>
            Ingrese el nuevo nombre:
                <input type="text" name="nuevo_nombre">
                <br>
                Ingrese el nuevo precio:
                <input type="text" name="nuevo_precio">
                <br>
                <button type="submit">GUARDAR</button>    
        </form>
        </div>
    </body>
</html>