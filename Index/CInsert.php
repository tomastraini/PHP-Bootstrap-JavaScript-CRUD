<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "udi2021";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$noum = $_POST['nombreclia'];
$direu = $_POST['direccionclia'];
$telu = $_POST['telefonoclia'];
$sql = "INSERT INTO clientes (razon_social_cliente, direccion, telefono)
VALUES ('". $noum ."', '". $direu ."', '". $telu ."')";

if ($conn->query($sql) === TRUE) {
  header("location: ABMClientesIndex.php");

$conn->close();

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


	
?>