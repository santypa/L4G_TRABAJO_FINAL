<center>
			<?php

				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}

			?>

</center>

<?php 
       include('includes/db.php');
   
       $sql="SELECT * FROM usuarios ";
       $result= DB::query($sql);
    
    $nombres = $_POST["nombres"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $celular = $_POST["celular"];
    $whatsapp = $_POST["whatsapp"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];

        


        $existe=0;
        while($mostrar= mysqli_fetch_array($result)){

            if($email == $mostrar['email']){
                    $existe++;

            }else{
               /* echo "-------" ;*/
            }
        }

        ////////////////////////////////////////////  VERIFICACION DE CORREO /////////////////////////////////////
        if($existe<1){
           
        $sql = "insert into usuarios(nombres,email,password,celular,whatsapp,direccion,ciudad) 
        values('$nombres', '$email',('$password'),'$celular','$whatsapp','$direccion','$ciudad')";
    
         if(DB::query($sql)){ //if($con->query($query) == true)
        echo " 
        <script>
			window.alert('¡Registro Exitoso!');
			window.history.back();
        </script> " 
        ;
        
        
        //header("location:index.php");  
         }else{
        echo "No se ha podido guardar la persona. " . $con->error;
            } 
        }
        else{
            echo " 
            <script>
                window.alert('¡Correo Existente !');
                window.history.back();
            </script> " 
            ;
        }
    
?>

