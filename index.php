<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php
// Datos de ejemplo (en un sistema real, debes obtener estos datos de una base de datos)
$username = 'user';
$password = 'password';

// Comprueba si el formulario ha sido enviado
if (isset($_POST['submit'])) {
    // Obtiene los datos ingresados por el usuario
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Comprueba si los datos ingresados son válidos
    if ($inputUsername === $username && $inputPassword === $password) {
        session_start();
        $_SESSION['user'] = $username;
        echo 'Login successful';
        // Aquí podrías redireccionar a otra página, por ejemplo:
        // header('Location: dashboard.php');
    } else {
        echo 'Invalid login credentials';
    }
}
?>

<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" name="submit" value="Login">
</form>

</body>
</html>
