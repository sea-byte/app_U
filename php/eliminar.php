<?php

require_once('conexion.php');

if(isset($_POST["Codigo"])){

    $cod = $_POST["Codigo"];

    $varint = intval($cod);
                
    $sql = "DELETE from tabla1 where codigo = $varint";

    $conexion->query($sql);
   
    if ($conexion->affected_rows > 0){
            echo ("Se elimino correctamente el Producto con ID: $varint");
       }      
  
    else{

        echo ("No se puedo eliminar el registro o no existe el ID: $varint".mysqli_error($conexion));
    }  
} 
?>