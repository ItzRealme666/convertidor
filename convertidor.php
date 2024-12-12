<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Conversión</title>
    <style>
        /*
         * Autor: Daniel Malagon Aguilar
         * Fecha de creación: [01-12-2024]
         * Última fecha de modificación: [02-12-2024]
         * Descripción: Aqui es el estilo del archivo
         */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333333;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            font-size: 16px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
         /*
         * Autor: Daniel Malagon Aguilar
         * Fecha de creación: [01-12-2024]
         * Última fecha de modificación: [02-12-2024]
         * Descripción: Este archivo procesa las conversiones de unidades y muestra los resultados.
         */
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $conversion = $_POST['conversion'];
            $valor = floatval($_POST['valor']);

            if ($valor <= 0) {
                echo "<h1>Error: El valor ingresado debe ser mayor a 0.</h1>";
                echo "<a href='index.html'>Volver al menú principal</a>";
                exit();
            }

            $resultado = 0;
            $unidad = "";

            /*
             Autor: Daniel Malagon Aguilar
             * Función: Procesar conversión
             * Fecha de creación: [02-12-2024]
             * Última fecha de modificación: [03-12-2024]
             * Descripción: Realiza el cálculo de la conversión seleccionada.
             */

            switch ($conversion) {
                case "kg_g":
                    $resultado = $valor * 1000;
                    $unidad = "gramos";
                    break;
                case "km_mi":
                    $resultado = $valor * 0.621371;
                    $unidad = "millas";
                    break;
                case "hrs_seg":
                    $resultado = $valor * 3600;
                    $unidad = "segundos";
                    break;
                default:
                    echo "<h1>Error: Conversión no válida.</h1>";
                    echo "<a href='index.html'>Volver al menú principal</a>";
                    exit();
            }

            echo "<h1>Resultado: $valor convertido son " . number_format($resultado, 2) . " $unidad.</h1>";
            echo "<a href='index.html'>Volver al menú principal</a>";
            echo "<br><a href='javascript:history.back()'>Realizar otro cálculo</a>";
        }
        ?>
    </div>
</body>
</html>
