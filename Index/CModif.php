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

$aidi = $_POST["ache"];
$nomcliax = $_POST["nomcliax"];
$direcliar = $_POST["direcliax"];
$telclix = $_POST["telcliax"];
echo $aidi;
$sql = "UPDATE clientes SET razon_social_cliente='".$nomcliax."', direccion ='".$direcliar."', telefono ='".$telclix."' WHERE id_cliente=".$aidi;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("location: ABMClientesIndex.php");
} else {
  echo "Error updating record: " . $conn->error;
}



$conn->close();
?>