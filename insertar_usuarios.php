
<?php

        // var_dump($_POST);

        $db_host="localhost:3306";
        $db_nombre="pagina_web";
        $db_usuario="root";
        $db_contra="";
 
        $conexion = mysqli_connect($db_host,$db_usuario, $db_contra, $db_nombre);
 
        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la base de datos";
            exit();
        }

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $fecha_nac=$_POST["fecha_nac"];
        $email=$_POST["email"];
        $password=$_POST["password"];


        $consulta="INSERT INTO usuarios (nombre, apellido, email, fecha_de_nacimiento, contrasena) values 
        ('$nombre','$apellido','$email','$fecha_nac',md5('$password'))";
 
        // echo $consulta;
       mysqli_query($conexion,$consulta);
        header("Location: iniciarsesion.html");
        mysqli_close($conexion);
    ?>












