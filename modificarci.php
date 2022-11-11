<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";

if($_POST){
$nuevo_id=$_POST['nuevo_id'];
$nuevo_nombre=$_POST['nuevo_nombre'];
$nuevo_apellidos=$_POST['nuevo_apellidos'];
$nuevo_correo=$_POST['nuevo_correo'];
$numero_telefono=$_POST['numero_telefono'];
$nuevo_tratamiento=$_POST['nuevo_tratamiento'];
$pon_dia=$_POST['pon_dia'];
$nueva_hora=$_POST['nueva_hora'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
}

$sql = "UPDATE citas SET nombre='".$nuevo_nombre."' WHERE id='".$cual_id."'";

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
        <link rel="stylesheet" href="indexci.css"/>
        <title>MODIFICAR</title>
    </head>
    <body>

        <div class="insert">
        <form action="modificarci.php" method="post" class="aqui">
        Ingrese id:
                <input type="text" name="ingrese_id">
                <br>
        Ingrese nombre:
                <input type="text" name="ingrese_nombre">
                <br>
                Ingrese apellidos:
                <input type="text" name="ingrese_apellidos">
                <br>
                Ingrese correo:
                <input type="text" name="ingrese_correo">
                <br>
                Ingrese telefono:
                <input type="text" name="ingrese_telefono">
                <br>
                Ingrese tratamiento:
                <input type="text" name="ingrese_tratamiento">
                <br>
                Ingrese dia:
                <input type="text" name="ingrese_dia">
                <br>
                Ingrese hora:
                <input type="text" name="ingrese_hora">
                <br>
                <button type="submit">GUARDAR</button>    
        </form>
        </div>
    </body>
</html>