<?php


require_once("conexion.php");


if (isset($_POST["nombre"],$_POST["marca"],$_POST["p_compra"],$_POST["c_compra"])){
        
        $n = $_POST["nombre"];
        $m = $_POST["marca"];
        $p = $_POST["p_compra"];
        $comp = $_POST["c_compra"];
    

        $sql = "INSERT into tabla1(nombre,marca,precio_compra,cantidad_compra) values ('$n','$m','$p','$comp')";
        
        if ($conexion->query($sql) === true) {
            echo ("Datos Guardados correctamente");
             }
        else {
            echo ("Error ingresando los datos: " . $conexion->error); 
            
            }
        }
        

?>