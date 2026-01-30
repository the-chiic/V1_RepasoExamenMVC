<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Total Deportes con Inscripciones</title>
        <link rel="stylesheet" href="views/css/style.css">
    </head>
    <body>
        <h2><a href="index.php?c=C_Menu&m=volverMenu">VOLVER</a></h2>
        <?php

            echo    "<div>".
                        "<h4>".$dato["total"]."</h4>".
                    "</div>";

        ?>
    </body>
</html>