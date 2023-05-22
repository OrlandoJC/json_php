<?php

?>
<!DOCTYPE html>
    <head>
        <title><?php echo $data["titulo"]; ?></title>
    </head>

    <body>
        <h2><?php echo $data["titulo"]; ?></h2>

        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">

            <p>Placa</p>
            <input type="text" id="placa" name="placa" maxlength="10">
            <br>

            <p>Marca</p>
            <input type="text" id="marca" name="marca" maxlength="25">
            <br>

            <p>Modelo</p>
            <input type="text" id="modelo" name="modelo" maxlength="25">
            <br>

            <p>Año</p>
            <input type="text" id="anio" name="anio" maxlength="4">
            <br>

            <p>Color</p>
            <input type="text" id="color" name="color" maxlength="25">
            <br><br>

            <button id="guardar" name="guardar" type="submit">Guardar</button>

        </form>
    </body>
</html>

