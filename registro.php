<?php
    include('includes/verify_install.php');
    include('includes/db.php');

    $sql="SELECT * FROM usuarios ";
    $result= DB::query($sql);
  ?>

<?php

?>

<!DOCTYPE html>
<html lang=es>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
    <link rel="stylesheet" href="css/style_regis.css">  
    <link rel="icon"href="ico/www.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>
    
    <div class="tobar" id="pos">

  
        <img src="ico/v.png" class="avatar" alt="Avatar Image"> 
        <form action="guardar_persona.php"  method="post">
         <div id="Nom">
         
         <input type="text" name="nombres" required placeholder="Nombres" id="l1" >
           
         <input type="text" name="gemail" required placeholder="Email" id="l3" >
            <div id="gma">
            <img src="ico/gmail.png" class="animated infinite pulse" alt="Avatar Image" id="gm" > 
            </div>
        
            <input type="password" name="password" required placeholder="Contraseña" id="l4"  >
            <img src="ico/hacker.png" class="animated infinite pulse " alt="Avatar Image" id="ps"> 
        
            <input type="text" name="celular" required placeholder="Celular" id="l5"  >
            <img src="ico/telefono.png" class="animated infinite pulse" alt="Avatar Image" id="te"> 

            <input type="text" name="whatsapp" required placeholder="WhatsApp" id="l2" >
            <img src="ico/whatsapp.png" class="animated infinite pulse" alt="Avatar Image" id="wa"> 

            <input type="text" name="direccion"  required placeholder="Direccion" id="l6">
            <img src="ico/map.png" class="animated infinite pulse" alt="Avatar Image" id="ma"> 

            <input type="text" name="ciudad"  required placeholder="Ciudad" id="l7" >
            <img src="ico/ciu.png" class="animated infinite pulse" alt="Avatar Image" id="ci"> 

            
         </div>

         <div id="registrar">
         <img src="ico/reg.png" class="reg" alt="Avatar Image">
         <input type="submit"name="btreg" value="Registrar" id="regt"class="animated infinite pulse delay-2s"
                <?php
                if(isset($_POST['btreg'])){
                    $gmai= $_POST['gmail'];
                    $num=1;
                    echo "<p>correo: {$gmai}</p>";
                    $usu=0;
                    while($mostrar= mysqli_fetch_array($result)){
                        if($gmai==$mostrar['email']){
                                $num++;
                        }
                        else{     
                                $usu++;
                        }
                    }  
                    session_start();
                    $_SESSION['numero']=$num;
                }
                ?>    
         >

         </div>
         </form>
         <a href="index.php"><input type="submit" value="Inicio" id="regti"class="animated infinite pulse delay-2s" ></a>
    </div >    


</body>    

</html>
