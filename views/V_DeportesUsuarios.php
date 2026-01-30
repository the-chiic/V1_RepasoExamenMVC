<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deportes Usuarios</title>
        <link rel="stylesheet" href="views/css/style.css">
    </head>
    <body>
        <h2><a href="index.php?c=C_Menu&m=volverMenu">VOLVER</a></h2>
        <?php

            $nombreNuevo="";
            foreach($datos as $dato){
                echo        "<div>";
                if($nombreNuevo!=$dato["nombreUsuario"]){
                    echo        "<h2>".$dato["nombreUsuario"]."</h2>";
                    $nombreNuevo=$dato["nombreUsuario"];
                }
                echo            "<h4>".$dato["nombreDep"]."</h4>".
                            "</div>";
            }

        ?>
    </body>
</html>