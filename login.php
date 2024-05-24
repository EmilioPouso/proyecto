<?php
 
$bd_host="localhost:3306";
$bd_nombre="pagina_web";
$bd_usuario="root";
$bd_contraseña="";
 
$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_contraseña, $bd_nombre);
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];  // mismo nombre que en el formulario 
 
    // Consulta para verificar las credenciales
    $consulta = "SELECT * FROM usuarios WHERE email='$email' AND contrasena=md5('$contrasena')";
    $resultado = mysqli_query($conexion, $consulta);
 
    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($resultado) == 1) {
        // Iniciar sesión o establecer alguna variable de sesión para mantener al usuario autenticado
        session_start();
        $_SESSION["email"] = $email;
        // Redirigir a la página de inicio o a alguna otra página protegida
        header("Location: login2.php"); //cambiar nombre al nombre de la pagina principal 
        exit;
    } else {
        // Si las credenciales no son válidas, redirigir a la página principal con un mensaje de error
        header("Location: paginaprincipal.html");
        exit;      
    }
}
 
?>


