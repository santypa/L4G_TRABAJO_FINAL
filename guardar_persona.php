<?php 
    include('includes/db.php');
    
    $nombres = $_POST["nombres"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $celular = $_POST["celular"];
    $whatsapp = $_POST["whatsapp"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];

   
        session_start();
        $val=$_SESSION['numero'];
        
     if($var==1){
        $sql = "insert into usuarios(nombres,email,password,celular,whatsapp,direccion,ciudad) 
        values('$nombres', '$email',('$password'),'$celular','$whatsapp','$direccion','$ciudad')";
    
         if(DB::query($sql)){ //if($con->query($query) == true)
        //echo "Persona guardada correctamente";
        //header("location:index.php");
        
            echo "<script>
                alert('Usuario Registrado Correctamente');
               window.location= 'login.php'
                </script>";
         }else{
        echo "No se ha podido guardar la persona. " . $con->error;
            } 

     }else{

        echo "<script>
                alert('El correo ya existe');
                window.location= 'registro.php'
                </script>";
     }
        


    
?>

