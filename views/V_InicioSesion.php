<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio Sesión</title>
        <link rel="stylesheet" href="views/css/style.css">
    </head>
    <body>
        <header>
            <h1>INICIO SESIÓN</h1>
        </header>
        <form action="index.php?c=C_InicioSesion&m=iniciarSesion" method="POST">
            <div>
                <label>Usuario:</label>
                <input type="text" name="nombre" placeholder="Usuario">
            </div>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="pw">
            </div>
            <input type="submit" value="ENVIAR">
            <h3><a href="index.php">VOLVER</a></h3>
        </form>
    </body>
</html>