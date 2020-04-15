<?php 
    include('includes/db.php');
    
    $nombres = $_POST["nombres"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $celular = $_POST["celular"];
    $whatsapp = $_POST["whatsapp"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    
    


    $sql = "insert into usuarios(nombres,email,password,celular,whatsapp,direccion,ciudad) 
        values('$nombres', '$email',MD5('$password'),'$celular','$whatsapp','$direccion','$ciudad')";
    
    if(DB::query($sql)){ //if($con->query($query) == true)
        echo "Persona guardada correctamente";
    }else{
        echo "No se ha podido guardar la persona. " . $con->error;
    } 
   
    header('Location: login.php');
?>



