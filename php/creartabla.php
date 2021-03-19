<?php

require("conexion.php");

$sql = "CREATE TABLE tabla1(codigo int(10) AUTO_INCREMENT PRIMARY KEY, nombre varchar(100),marca varchar(100),precio_compra int (10),cantidad_compra int(4))";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada correctamente"; 
    }
     else {
    echo "Error en la creacion de la tabla: " . mysqli_error($conn); 
    
    }

?>