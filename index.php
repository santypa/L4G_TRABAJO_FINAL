<?php
    include('includes/verify_install.php');
    include('includes/db.php');

?>

<!DOCTYPE html>
<html lang=es>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/style_index.css">  
    <link rel="icon"href="ico/www.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>
    
    <div class="tobar" id="pos">

        <img src="ico/objetivo.png" class="avatar" alt="Avatar Image" > 
        
         <div id="registrar">
         <img src="ico/reg.png" class="reg" alt="Avatar Image">
         <a href="registro.php">  <input type="submit" value="Registrar" id="regt"class="animated infinite pulse " ></a>
         </div>
         
         <div id="invitado">
         <img src="ico/v.png" class="inv" alt="Avatar Image"> 
         <a href="invitado.php">   <input type="submit" value="Invitado" id="invi" class="animated infinite pulse "  ></a>
         </div>
         
         <div id="login">
         <img src="ico/inicio.png" class="log" alt="Avatar Image"> 
         <a href="login.php">   <input type="submit" value="LOGIN" id="lgi" class="animated infinite pulse "  ></a>
         </div>


    </div >    


</body>    

</html>

