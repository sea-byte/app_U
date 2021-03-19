<?php


date_default_timezone_set("America/Bogota");
$dbhost="localhost";
$dbuser="root";
$dbpass="12345678";
$dbname="bd_andes";
$fecha=date("Y-m-d-H-i-s").".sql";




system("/Applications/MAMP/Library/bin/mysqldump --host=localhost -uroot -p12345678 bd_andes >/Applications/MAMP/htdocs/www/full/backups/".$fecha );


?>