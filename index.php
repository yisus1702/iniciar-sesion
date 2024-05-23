<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="password" name="clave" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>¿Aún no tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
    </div>
</body>
</html>
