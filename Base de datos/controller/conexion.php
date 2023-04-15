<?php
$host="localhost"; //192.168.9.30
$user="root";
$password="";
$Dbname="graphic money";

$con=mysqli_connect($host, $user, $password, $Dbname);
mysqli_set_charset($con, 'utf8'); //MUY IMPORTANTE
if (mysqli_connect_errno()) {
    echo 'no se pudo conectar';
}
else {
    echo 'conexion exitosa';
}
?>
