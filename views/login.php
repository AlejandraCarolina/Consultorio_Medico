<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión - Medical Care</title>
    </head>
    <body>
        <h2>Iniciar Sesión</h2>
        <form action="./index.php?controller=loginController&action=autenticar" method="POST">
            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo" required><br><br>
            <label for="contrasena">Contraseña:</label><br>
            <input type="password" id="contrasena" name="contrasena" required><br><br>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </body>
</html>
