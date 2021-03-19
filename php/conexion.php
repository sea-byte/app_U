<?php
$servername = "localhost"; 
$username = "root"; 
$password = "12345678";
$bd = "bd_andes";

// Create connection
$conexion = mysqli_connect($servername, $username, $password,$bd);
// Check connection
if (!$conexion) {
die("La conexion Fallo" . mysqli_connect_error());
}
?>