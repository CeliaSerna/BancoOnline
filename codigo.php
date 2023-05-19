<?php
function validar_requerido($texto){
             if(trim($texto)==""){
                return false;
            }else{
                return true;
            }
        }
function validar_requerido2($texto){
             if(ctype_alnum(trim($texto))==""){
                return false;
            }else{
                return true;
            }
        }        

function validar_entero($numero){
            if (filter_var($numero, FILTER_VALIDATE_INT) ===FALSE ) {
                return false;
            }else{
                return true;
            }
        }
function validar_email($texto){
            if (filter_var($texto, FILTER_VALIDATE_EMAIL) === FALSE){
                return false;
            }else{
                return true;
            }
        }
function validar_email2($texto){
        if (isset ($_POST["enviar"])){
        $email = (strtolower($_POST["email"]));
       $email2 = (strtolower($_POST["conf_email"]));
        }    
            if( $email != $email2) {
                return false;
            }else{
                return true;
            }
        }
function validar(){
        if (isset ($_POST["enviar"])){
        $dni = $_POST["dni"];
        $email = (strtolower($_POST["email"]));
        $telef = $_POST["telef"];
        $email2 =(strtolower($_POST["conf_email"]));
        if (!validar_requerido2($dni)){
            $errores[]= "El campo DNI es obligatorio";
        }
        if (!validar_entero($telef)){
            $errores[] = "El campo Teléfono debe ser un número de 9 cifras";
        }
        if (!validar_email($email)){
            $errores[] = "El campo Email tiene un formato no válido";
        }
        if (!validar_email2($email2)){ 
            $errores[] = "Los emails no coinciden";
        }    
if (isset($errores)){
        foreach ($errores as $error){
            echo" <p class='resul'><span class='material-icons'>error_outline</span>". $error . "</li></p>";
        }
}else{
include 'conexion3.php';
$consulta="INSERT INTO datos_clientes (dni,email,telefono) values ('$dni','$email','$telef')";
$consulta2="select max(id_cliente) from datos_clientes";
mysqli_query($conexion,$consulta);
$id_cliente=(mysqli_query($conexion,$consulta2));
$resultados=mysqli_fetch_row($id_cliente);
$_SESSION["id"] = $resultados;

 
echo "<script>window.location='banco2.php'</script>";
        }
        }
        }       

function validar2(){
        if (isset ($_POST["enviar2"])){
        $nombre = (ucwords(strtolower($_POST["nombre"])));
        $edad = $_POST["edad"];
        $primerape =(ucwords(strtolower ($_POST["pri_ape"])));
        $segunape = (ucwords(strtolower ($_POST["seg_ape"])));
        if (!validar_requerido($nombre)){
            $errores[]= "Escriba su nombre";
        }
        if (!validar_entero($edad)){
            $errores[] = "La edad debe ser un número";
        }
        if (!validar_requerido($primerape)){
            $errores[] = "Escriba su primer apellido";
        }
        if (!validar_requerido($segunape)){ 
            $errores[] = "Escriba su segundo apellido";
        }       
        if (isset($errores)){
        foreach ($errores as $error){
            echo" <p class='resul'><span class='material-icons'>error_outline</span>". $error . "</li>";
        }
        }else{
          $id=$_SESSION["id"];
          echo $id[0];//aqui no hace nada
          include 'conexion3.php';
          
           $consulta3="UPDATE datos_clientes SET nombres='$nombre',edad='$edad',apellido1='$primerape',apellido2='$segunape' WHERE id_cliente= '$id_cliente[0]'";
         $resultados=(mysqli_query($conexion, $consulta3));
         mysqli_close($conexion);    
        echo "<script>window.location='banco3.php'</script>";
        }
        }
        }
        
          

function anterior(){
    if (isset($_POST["volver"])){
        echo "<script> window.location = 'banco2.php' </script>";
    }
}
  
?>
