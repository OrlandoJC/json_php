<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['generarJson'])) {
        // Paso 1: Convertir el arreglo en una cadena JSON
        $jsonData = json_encode($data);

        // Paso 2: Escribir la cadena JSON en un archivo
        $file = 'datos.json';
        file_put_contents($file, $jsonData);
        
        echo '<script>alert("Archivo JSON generado correctamente.");</script>';
    }
}
?>
<!DOCTYPE html>

    <head>
        <title><?php echo $data["titulo"]; ?></title>
        <link rel="stylesheet" href="public/estilo.css">
    </head>

    <body>
        <h2><?php echo $data["titulo"];?></h2>
        <br>
        <a href="index.php?c=vehiculos&a=nuevo">Agregar coches</a>

        <br><br>

        <table border="1" width="80%">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Color</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>


            <tbody>
                <?php foreach($data["vehiculos"] as $dato)
                    {
                        echo "<tr>";
                        echo "<td>".$dato["placa"]."</td>";
                        echo "<td>".$dato["marca"]."</td>";
                        echo "<td>".$dato["modelo"]."</td>";
                        echo "<td>".$dato["anio"]."</td>";
                        echo "<td>".$dato["color"]."</td>";
                        echo "<td><a href = 'index.php?c=vehiculos&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";

                        echo "<td><a href = 'index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="generarJson" value="true">
        <button type="submit">generar JSON</button>
        </form>
        
    </body>
</html>

