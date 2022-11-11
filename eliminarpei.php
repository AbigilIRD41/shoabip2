<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gala1";

if($_POST){

$que_id=$_POST['que_id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
}

$sql = "DELETE FROM peinados WHERE id='".$que_id."'";

if ($conn->query($sql) === TRUE) {
  echo "<strong>YA SE BORRO</strong>";
} else {
  echo "<strong>ERROR AL BORRAR</strong>" . $conn->error;
}

$conn->close();
}
?>

<html>
    <head>
        <link rel="stylesheet" href="index.css"/>
        <title>BORRAR</title>
    </head>
    <body>

    <div class="insert">
        <form action="eliminarpei.php" method="post" class="aqui">
        Que id desea eliminar?
        <input type="text" name="que_id">
        <br>
        <button type="submit">GUARDAR</button>
        </div>

    </body>
</html>
