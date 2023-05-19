<?php
$dbserver="localhost";
$dbuser="alumnoacc8_alumno8cc";
$dbpass="alum2055-CC";
$dbnombre="alumnoacc8_banco_online";
$conexion= mysqli_connect($dbserver,$dbuser,$dbpass);
if (mysqli_connect_errno()){
    echo "<span style='color:red'>Existe un error con el servidor</p>";
    exit();
}
mysqli_select_db($conexion, $dbnombre) or die
   ( "<span style='color:red'>Existe un error con la base de datos</p>");
mysqli_set_charset($conexion, "UTF_8");

