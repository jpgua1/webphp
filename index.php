<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Creativo</title>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h1>Bienvenido</h1>
            <form action="procesar_login.php" method="post">
                <div class="input-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-group">
                    <button type="submit" class="login-btn">Iniciar Sesión</button>
                    <button type="button" class="register-btn" onclick="location.href='registro.php'">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
