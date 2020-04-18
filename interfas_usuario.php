<?php
    include('includes/verify_install.php');
     include('includes/db.php');

     $sql="SELECT * FROM usuarios ";
     
     $result= DB::query($sql);
  //  $result= mysqli_query($con,$sql);
 
?>


<!DOCTYPE html>
<html lang=es>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL</title>

    <link rel="stylesheet" href="css/style_pag.css">  
    <link rel="icon"href="ico/www.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
   
   <div class="barin"> 
      <?php  
        session_start();
        $var=$_SESSION['gmail'];
        echo "$var  asd   $nu";
        
      
      ?>
  </div>

  <div class="usua">
  
  </div>
  
  <div class="bodyin">
  
  
  </div>

</body>
</html>