<!DOCTYPE html>
<!-- -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" href="estilo.css" type="text/css" media="screen">
        <link href="font.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
         <?php
        include_once 'header.php';
        
        ?>
        <fieldset>
            <div class="for">1<span class="material-icons" style="color:white">arrow_forward</span>
        2<span class="material-icons" style="color:white">arrow_forward</span>
        <span style="color:orange">3</span> </div>
           
            <p class="comen"><strong>¡T e r m i n a m o s!</strong><br><br></p>
            <p  class="comen2">El alta en <span style="color:orange">BANCA ONLINE</span> se ha realizado exitosamente. Recibirá en breve un email para realizar
           una videollamada y comrpobar sus datos.</p>
           <p class="gracias">Gracias por dejarnos ser su banco.</p>
           <form method="post" action="" name="formulario">
              
               <p class="boton3">
                   <input type="submit" name="volver" value="Anterior"   class="boton">  
               </p>
               

          
<?php
 include "codigo.php";  
anterior();
       
?>
        
</form>
</fieldset>
</body>
</html>