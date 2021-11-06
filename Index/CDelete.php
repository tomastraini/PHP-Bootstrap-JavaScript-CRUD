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

$aidi = $_POST["achex"];

$sql = "delete from clientes where id_cliente =".$aidi;

if ($conn->query($sql) === TRUE) {
  header("location: ABMClientesIndex.php");

$conn->close();

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


	
?>