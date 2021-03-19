<?php

require_once('conexion.php');

if(isset($_POST["codigo"])){

    $cod = $_POST["codigo"];
    

    $varint = intval($cod);
                
    $sql = "SELECT * FROM tabla1 where codigo = $varint";
 
    $result = mysqli_query($conexion,$sql);
    
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $nom = $row['nombre'];
        $mar = $row['marca'];
        $pc = $row['precio_compra'];
        $cc = $row['cantidad_compra'];

        echo "<h2> ";
        echo "<style>
        h2 { color: white;}
        </style>";
        echo ( "<b> NOMBRE: </b> $nom  </br> MARCA:  $mar  </br>  PRECIO DE COMPRA:  $pc   </br>  CANTIDAD DECOMPRA:  $cc " );
        echo"</h2>";
    }
}

        ?>