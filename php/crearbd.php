<?php
$servername = "localhost"; 
$username = "root"; 
$password = "12345678";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
die("La conexion Fallo" . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE bd_andes"; 

if (mysqli_query($conn, $sql)) {
echo "base de datos creada correctamente"; 
}
 else {
echo "Error en la creacion base de datos: " . mysqli_error($conn); 

}
mysqli_close($conn);
?>
