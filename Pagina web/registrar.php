<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $clave = '';
    $nombreBD = 'taller';
    

    $enlace = mysqli_connect($servidor,$usuario,$clave,$nombreBD)
    or die(mysql_error(mysqli));

    insertar($enlace);

    function insertar($enlace){
        
        $Nombre= $_POST['Nombre'];
        $Email= $_POST['Email'];
        $Telefono= $_POST['Telefono'];
        $Mensaje= $_POST['Mensaje'];
        

        


        $insertarDatos = "INSERT INTO citas (Nombre, Email, Telefono, Mensaje)
        VALUES ('$Nombre','$Email','$Telefono','$Mensaje')";

        mysqli_query($enlace,$insertarDatos);
        mysqli_close($enlace);

        
        echo '
        <h2>Registro completo!</h2>
        <a href="agendar.html">Volver al sitio</a> <br>'; 
        
        
        echo "$Nombre,  $Email,  $Telefono y  $Mensaje";
        
        
    }

    
?>