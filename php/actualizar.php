<?php

include_once('conexion.php');


if (isset(  $_POST["Codigo"],
            $_POST["nombre"], 
            $_POST["marca"], 
            $_POST["p_compra"], 
            $_POST["c_compra"]
)){
    $c = $_POST["Codigo"];
    $varint = intval($c);
    $n = $_POST["nombre"];
    $m = $_POST["marca"];
    $pc = $_POST["p_compra"];
    $vpc = intval($pc);
    $cc = $_POST["c_compra"];
    $vcc = intval($cc);

    $sql = " UPDATE tabla1 SET nombre = '$n', marca = '$m', precio_compra = $vpc, cantidad_compra = $vcc where codigo = $varint ";
 
      
    if(mysqli_query($conexion,$sql)){
        echo ("Datos actualizados correctamente");
    }
    else{
        echo ("Error actualizando datos". $conexion->error);   
    }
}

?>