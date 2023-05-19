<!DOCTYPE html>
<!-- -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" href="estilo.css" type="text/css" media="screen">
        <link href="font.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="funcion.js"></script>
    </head>
    <body>
        <?php
        include_once 'header.php';
$dbserver="localhost";
$dbuser="root";
$dbpass="";
$dbnombre="banco_online";
$conexion= mysqli_connect($dbserver,$dbuser,$dbpass);
if (mysqli_connect_errno()){
    echo "<p class='comen'><span style='color:red'>Existe un error con el servidor</p>";
    exit();
}
mysqli_select_db($conexion, $dbnombre) or die
   ( "<p class='comen'><span style='color:red'>Existe un error con la base de datos</p>");
mysqli_set_charset($conexion, "utf8");

$consulta="SELECT nombres,apellido1,apellido2,dni,email,telefono,edad FROM datos_clientes";
$resultados=(mysqli_query($conexion, $consulta));
  

    echo "<table class='basedatos'><tr><th>Nombre</th><th>Apellidos</th><th>Dni</th><th>Email</th><th>Telefono</th></tr>";
    while ($fila=mysqli_fetch_assoc($resultados)){
        echo "<tr>";
    echo "<td class='basedatos2'>" . ucwords(strtolower($fila["nombres"]))."</td>";
    echo "<td class='basedatos2'>".ucwords(mb_strtolower($fila["apellido1"]))." ".ucwords(mb_strtolower($fila["apellido2"]))."</td>";
    echo "<td class='basedatos2'>" . $fila["dni"]."</td>";
    echo "<td class='basedatos2'>" . mb_strtolower($fila["email"])."</td>";
    echo "<td class='basedatos2'>" . $fila["telefono"]."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>
</body>
</html>
