<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscripción</title>
        <link rel="stylesheet" href="views/css/style.css">
    </head>
    <body>
        <h3><a href="index.php">VOLVER</a></h3>
        <h1>FORMULARIO</h1>
        <form action="index.php?c=C_Inscripcion&m=inscribirse" method="POST">
            <div>
                <label>Nombre Usuario:</label>
                <input type="text" name="nombreUsuario" placeholder="TheChic">
            </div>
            <div>
                <label>Apellidos y Nombre:</label>
                <input type="text" name="apeNombre" placeholder="Risco Sánchez Adrián">
            </div>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="pw" placeholder="········">
            </div>
            <div>
                <label>Correo:</label>
                <input type="email" name="correo" placeholder="tilin@gmail.com">
            </div>
            <div>
                <label>Teléfono:</label>
                <input type="tel" name="tel" placeholder="900 20 20 10">
            </div>
            <?php

                foreach($deportes as $deporte){
                    echo    "<div>".
                                "<input type='checkbox' name='deportes[]' value='".$deporte["idDeporte"]."'>".
                                "<label>".$deporte["nombreDep"]."</label>".
                            "</div>";
                }

            ?>
            <div>
                <input type="checkbox" name="condiciones">
                <label>Aceptar las Condiciones</label>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </body>
</html>