
<?php

/*
Desarrollado por:
Nombre: CHARLENE MELISSA RIOS NELSON
Programa de Formación: DESARROLLO WEB CON PHP (2971618)
Evidencia: Taller “Uso de arreglos”
*/

// Arreglo de personas
$personas = array(
    array("nombre" => "Tania Rodrigo", "direccion" => "Cra. 45 # 45-56", "telefono" => "3456789", "fecha_cumpleanos" => "23/12/1997", "color_favorito" => "Amarillo"),
    array("nombre" => "Camilo paez", "direccion" => "Clle. 23 # 12-19 Sur", "telefono" => "3214567", "fecha_cumpleanos" => "12/10/1980", "color_favorito" => "Verde"),
    array("nombre" => "Alejandra Soto", "direccion" => "Av. 34 # 16-12", "telefono" => "2135423", "fecha_cumpleanos" => "07/06/2000", "color_favorito" => "Rojo")
);

// Arreglo de colores con sus significados
$colores = array(
    "Amarillo" => "Riqueza y alegría",
    "Verde" => "Naturaleza y frescura",
    "Rojo" => "Pasión y energía"
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tabla de Personas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Estilo para encabezados de la tabla */
        th.header {
            background-color: #4a90e2;
            color: #1d3557;
            font-weight: bold;
        }

        /* Estilo para el título de la tabla */
        .titulo-tabla {
            background-color: #4a90e2; 
            color: #1d3557;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="titulo-tabla">Tabla</div>

    <table>
        <tr>
            <!-- Estilos para encabezados de la tabla -->
            <th class="header">Nombre</th>
            <th class="header">Dirección</th>
            <th class="header">Teléfono</th>
            <th class="header">Fecha de Cumpleaños</th>
            <th class="header">Color Favorito</th>
            <th class="header">Significado</th>
        </tr>
        <?php foreach ($personas as $persona) : ?>
            <tr>
                <td><?php echo $persona['nombre']; ?></td>
                <td><?php echo $persona['direccion']; ?></td>
                <td><?php echo $persona['telefono']; ?></td>
                <td><?php echo $persona['fecha_cumpleanos']; ?></td>
                <td><?php echo $persona['color_favorito']; ?></td>
                <td>
                    <?php
                    // Busca el significado del color favorito en el arreglo de colores
                    if (array_key_exists($persona['color_favorito'], $colores)) {
                        echo $colores[$persona['color_favorito']];
                    } else {
                        echo "No se encuentra el significado";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>
