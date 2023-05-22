<?php

?>
<!DOCTYPE html>
    <head>
        <title><?php echo $data["titulo"]; ?></title>
    </head>

    <body>
        <h2><?php echo $data["titulo"]; ?></h2>

        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">

          <input type="hidden" id="id" name="id" value="<?php echo $data["id"];?>">

            <p>Placa</p>
            <input type="text" id="placa" name="placa" maxlength="10" value = "<?php echo $data["vehiculos"]["placa"];?>">
            <br>

            <p>Marca</p>
            <input type="text" id="marca" name="marca" maxlength="25" value = "<?php echo $data["vehiculos"]["marca"];?>">
            <br>

            <p>Modelo</p>
            <input type="text" id="modelo" name="modelo" maxlength="25" value = "<?php echo $data["vehiculos"]["modelo"];?>">
            <br>

            <p>Año</p>
            <input type="text" id="anio" name="anio" maxlength="4" value = "<?php echo $data["vehiculos"]["anio"];?>">
            <br>

            <p>Color</p>
            <input type="text" id="color" name="color" maxlength="25" value = "<?php echo $data["vehiculos"]["color"];?>">
            <br><br>

            <button id="guardar" name="guardar" type="submit">Guardar</button>

        </form>
    </body>
</html>