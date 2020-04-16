<?php
    include('includes/verify_install.php');
     include('includes/db.php');

     $sql="SELECT * FROM usuarios ";
     
     $result= DB::query($sql);
  //  $result= mysqli_query($con,$sql);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
  <!--  <link rel="stylesheet" href="css/styles_index.css">   -->
    <link rel="icon"href="ico/Favicon.ico">
</head>
<body>
    <div class="Tabls">

            <h1> Datos de la Base de datos </h1>

      <table class="tbl">
         <tr>
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Password</th>
              <th>Celular</th>
              <th>WhatsApp</th>
              <th>Direccion</th>
              <th>Ciudad</th>
       

           </thead>      
        </tr>

    <?php

        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
         <td><?php echo $mostrar['id'] ?></td>
         <td><?php echo $mostrar['nombres'] ?></td>
         <td><?php echo $mostrar['email'] ?></td>
         <td><?php echo $mostrar['password'] ?></td>
         <td><?php echo $mostrar['celular'] ?></td>
         <td><?php echo $mostrar['whatsapp'] ?></td>
         <td><?php echo $mostrar['direccion'] ?></td>
         <td><?php echo $mostrar['ciudad'] ?></td>
      
        </tr>

            <?php
        }
     ?>
  
      </table>

    <!--  <a href="crear.php" ><img src="img/bt3.png"   alt="logo"></a> --> 
      

</div>
  
</body>
</html>