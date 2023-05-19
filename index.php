 <?php
     session_start();
?>
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
        
        ?>
        <fieldset>
            <div class="for"><span style="color:orange">1</span><span class="material-icons" style="color:white">arrow_forward</span>
           2<span class="material-icons" style="color:white">arrow_forward</span>
           3
           </div>
           <p class="comen"><strong>¡C o m e n c e m o s!</strong><br><br>
           Por favor necesitamos estos datos para iniciar tu proceso de alta:</p>
           <form method="post" action="" name="formulario">
                 <p class="izq">
                <input type="text" name="dni" placeholder="DNI" class="inpu" pattern=".{8,}"><br>
               00000000A<br><br>
                <input type="text" name="email" placeholder="EMAIL" class="inpu"><br>
                usuario@dominio.net <br><br>
               </p>
               
               <p class="der"> 
                   <input type="text" name="telef" placeholder="TELÉFONO MÓVIL" class="inpu" pattern=".{9,}"><br>
                000 000 000    <br><br>
                 <input type="text" name="conf_email" placeholder="CONFIRMA TU EMAIL" class="inpu">  <br> 
                usuario@dominio.net <br><br>
               </p>
               <p class="izq2"> <input id="casilla" type = "checkbox" onchange="habilitar()">
                   He leído y entiendo la <a href="https://www.aepd.es/es" target="_blank"> política de protección de datos de carácter personal. </a></p>
               <p class="boton2">
                   <input type="submit" value="Siguiente" name="enviar" id="boton_pro" class="boton" disabled>
                            
                   <input type="reset" value="Limpiar" onclick="limpiar2()" class="boton">     
               </p>
                 </form>
        </fieldset>
               <div id="mostrar">
                 
<?php
 include "codigo.php";  
 validar(); 

?>
        
      
               </div> 
</body>
</html>
