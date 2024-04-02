<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contrasena'];
    
    // Establecer la conexión a la base de datos
    $conex = mysqli_connect("localhost", "root", "", "registros");

    // Consulta preparada para prevenir inyección SQL
    $consulta = "SELECT * FROM datos WHERE usuario=? AND contraseña=?";
    $stmt = mysqli_prepare($conex, $consulta);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contraseña);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // Obtener el resultado de la consulta preparada

    $filas = mysqli_num_rows($result);

    if ($filas) {
        // Las credenciales son válidas, redirigir a la página de inicio
        $_SESSION['usuario'] = $usuario; // Guardar el nombre de usuario en la sesión
        mysqli_free_result($result);
        mysqli_close($conex);
        header("Location: /ECO_SENSE/inicio.php");
        exit(); // Asegurar que el script se detenga después de redirigir
    } else {
        // Las credenciales son incorrectas, establecer mensaje de error en una variable de sesión
        $_SESSION['error_login'] = "Usuario o contraseña incorrectos";
        mysqli_free_result($result);
        mysqli_close($conex);
        header("Location: /ECO_SENSE/login.php"); // Redirigir de vuelta al formulario de inicio de sesión
        exit();
    }
} else {
    // Si no se envió el formulario de inicio de sesión, redirigir al formulario de inicio de sesión
    header("Location: /ECO_SENSE/login.php");
    exit();
}
?>