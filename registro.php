<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="validation.js" defer></script>
    <title>Registro</title>
    
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <h1>Registro</h1>
            <form action="procesar_registro.php" method="post">
                <div class="input-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-group">
                    <button type="submit" class="register-btn">Registrar</button>
                    <button type="button" class="back-btn" onclick="location.href='index.php'">Volver Atrás</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
