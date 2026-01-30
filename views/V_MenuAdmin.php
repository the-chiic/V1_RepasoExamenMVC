<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menú Admin</title>
        <link rel="stylesheet" href="views/css/style.css">
    </head>
    <body>
        <header>
            <h1>MENÚ</h1>
        </header>
        <main>
            <h2>Datos:</h2>
            <p>Correo: <?php echo $usuario["correo"] ?></p>
            <p>Teléfono: <?php echo $usuario["telefono"] ?></p>
            <h3><a href="index.php?c=C_InicioSesion&m=cerrarSesion">CERRAR SESIÓN</a></h3>

            <h4><a href="index.php?c=C_Menu&m=deportesUsuarios">Deportes Usuarios</a></h4>
            <h4><a href="index.php?c=C_Menu&m=totalDeportes">Total Deportes</a></h4>
            <h4><a href="index.php?c=C_Menu&m=usuariosDeportes">Usuarios Deportes</a></h4>
        </main>
    </body>
</html>