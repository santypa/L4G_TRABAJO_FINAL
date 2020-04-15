<?php
    include('includes/verify_install.php');
     include('includes/db.php');
    
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon"href="ico/log2.ico">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/styles_crear.css"> 
    <title>Registrarse</title>
</head>
<body>
 
 <div class="login-box" >

     
      <img src="img/lgo2.png" class="avatar" alt="Avatar Image"> 
     <h1>Registrarse</h1>
     
     <form action="guardar_persona.php" method="post">
         
            <label >Nombres</label> 
            <input type="text" name="nombres" required placeholder="Nombres">
            
            <label >Email</label> 
            <input type="text" name="email" required placeholder="Email">

            <label >Contraseña</label> 
            <input  type="password" name="password" required placeholder="Password">

            <label >Celular</label> 
            <input type="text" name="celular" required placeholder="Celular">
            
            <label >WhatsApp</label> 
            <input type="text" name="whatsapp" required placeholder="WhatsApp">
            
            <label >Direccion</label> 
            <input type="text" name="direccion" required placeholder="Direccion">
            
            <label >Ciudad</label> 
            <input type="text" name="ciudad" required placeholder="Ciudad">

             <input  type="submit" value="Guardar">
            
    
          
          <!--<a href="index.php"><img src="img/bt4.png"  alt="logo"></a> -->  
                  
   </form>
     
 </div>
 
    
</body>
</html>