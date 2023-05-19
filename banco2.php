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
            <div class="for">1<span class="material-icons" style="color:white">arrow_forward</span>
                <span style="color:orange">2</span><span class="material-icons" style="color:white">arrow_forward</span>
                3 </div>
           
           <p class="comen"><strong>¡C o n t i n u a m o s!</strong><br><br>
           Por favor necesitamos más datos para continuar tu proceso de alta:</p>
           <form method="post" action="" name="formulario">
               <p class="izq">
                   <input type="text" name="nombre" placeholder="NOMBRE" class="inpu"><br>
                   Tu nombre <br><br>
                  <input type="text" name="edad" placeholder="EDAD" class="inpu"> <br>
                  00 <br>
               </p>
               <p class="der">
                  <input type="text" name="pri_ape" placeholder="PRIMER APELLIDO" class="inpu" pattern="{9}"> <br>
                   
                   Tu primer apellido Ej: Sánchez <br><br>
                   <input type="text" name="seg_ape" placeholder="SEGUNDO APELLIDO" class="inpu">  <br>
                   Tu primer apellido Ej: García <br>
                   
               </p>
               
               <p class="boton2">
               <input type="submit" value="Siguiente" name="enviar2" id="boton_pro" class="boton">
                     <input type="reset" value="Limpiar" onclick="limpiar2()" class="boton">     
               </p>
</form>
</fieldset>
               <div id="mostrar">                
<?php
 include "codigo.php";  
 validar2(); 
?>
        

               </div>
</body>
</html>


