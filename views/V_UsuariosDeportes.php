<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuarios Deportes</title>
        <link rel="stylesheet" href="views/css/style.css">
    </head>
    <body>
        <h2><a href="index.php?c=C_Menu&m=volverMenu">VOLVER</a></h2>
        <?php

            $deporteNuevo="";
            foreach($datos as $dato){
                echo        "<div>";
                if($deporteNuevo!=$dato["nombreDep"]){
                    echo        "<h2>".$dato["nombreDep"]."</h2>";
                    $deporteNuevo=$dato["nombreDep"];
                }
                echo            "<h4>".$dato["nombreUsuario"]."</h4>".
                            "</div>";
            }

        ?>
    </body>
</html>