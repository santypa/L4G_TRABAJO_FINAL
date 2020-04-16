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
    <title>index</title>
    
    <link rel="stylesheet" href="css/style_login.css">  
    <link rel="icon"href="ico/www.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

</head>

<body>
<div class="tobar" id="pos">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <img src="ico/login.png" class="avatar" alt="Avatar Image" >

    <div id="gmail">
         <img src="ico/gmail.png" id="ge" alt="Avatar Image" class="animated infinite pulse" >
         <input type="text" name="gmail" id="gm" required placeholder="Gmail: ejemplo@gmail.com"  >
    </div>
    <div id="passw">
         <img src="ico/hacker.png" class="animated infinite pulse" alt="Avatar Image" id="pas"> 
         <input type="password" name="passe" id="passwo"  required placeholder="Password :"  >
    </div>
    <div id="inici">
        
        <input type="submit" name="btn1"  value="ENTRAR" id="ini2" class="animated infinite pulse delay"  
        <?php
        if(isset($_POST['btn1'])){
            $gmai= $_POST['gmail'];
            $pass=$_POST['passe'];

            echo "<p>correo: {$gmai}, contraseña: {$pass} </p>";
            $usu=0;
            $reg=0;
            
            while($mostrar= mysqli_fetch_array($result)){
               
                if($gmai==$mostrar['email'] && $pass == $mostrar['password'] ){
                        $reg++;
                        //echo "el usuario si existe {$reg}";  
                }
                else{     
                        $usu++;
                       // echo "sin registrar {$usu}";
                }
            }  

            if($reg > 0){
                echo "<script>
                window.location= 'interfas_usuario.php'
                </script>";
            }
        }
        ?>
         >
     </div>
    

</form>
                <a href="index.php"> <input type="submit" value="INICIO" id="ini" class="animated infinite pulse delay"  ></a>
</div>
</body>
</html>