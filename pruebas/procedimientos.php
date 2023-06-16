<!DOCTYPE html>
<html>
<head>
    <title>Interacción con Procedimientos Almacenados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            margin-top: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            padding: 5px;
            width: 200px;
            font-size: 14px;
        }

        input[type="submit"] {
            padding: 8px 12px;
            font-size: 14px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            background-color: #ffffff;
            padding: 10px;
            border-radius: 5px;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Interacción con Procedimientos Almacenados</h1>

    <?php
    // Datos de conexión a la base de datos
    $host = 'localhost';
    $usuario = 'rmichelvBD';
    $contraseña = 't3qu13r0Sql';
    $base_de_datos = 'ProyectoIntegrador';

    // Conexión a la base de datos
    $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

    // Función para ejecutar un procedimiento almacenado sin parámetros
    function ejecutarProcedimientoSinParametros($conexion, $nombreProcedimiento) {
        $sql = "CALL $nombreProcedimiento()";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
    }

    function ejecutarProcedimientoConParametros($conexion, $nombreProcedimiento, $parametros) {
        $sql = "CALL $nombreProcedimiento($parametros)";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
    }

    // Verificar si se ha enviado el formulario para obtener datos de datos_persona
    if (isset($_POST['obtenerDatosPersona'])) {
        $idPersona = $_POST['idPersona'];
        $resultado = ejecutarProcedimientoConParametros($conexion, 'obtener_datos_persona', $idPersona);

        if ($resultado) {
            // Verificar si se obtuvieron filas de resultados
            if (mysqli_num_rows($resultado) > 0) {
                // Obtener la primera fila de resultados
                $fila = mysqli_fetch_assoc($resultado);

                echo '<p>';
                echo 'ID Persona: ' . $fila['Id_persona'] . '<br>';
                echo 'Nombre: ' . $fila['Nombre'] . '<br>';
                echo 'Apellido: ' . $fila['Apellido'] . '<br>';
                // ... mostrar otros campos que desees ...
                echo '</p>';
            } else {
                echo 'No se encontraron resultados para el ID de persona proporcionado.';
            }
        } else {
            echo '<div class="error-message">Error al ejecutar el procedimiento almacenado obtener_datos_persona.</div>';
        }

    }

    // Verificar si se ha enviado el formulario para obtener datos de cliente
    if (isset($_POST['obtenerClientes'])) {
        $resultado = ejecutarProcedimientoSinParametros($conexion, 'obtener_clientes');

        if ($resultado) {
            // Mostrar los resultados obtenidos
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<p>';
                echo 'ID Cliente: ' . $fila['Id_cliente'] . '<br>';
                echo 'ID Persona: ' . $fila['Id_persona'] . '<br>';

                // Obtener los datos de la tabla datos_persona
                $nombre = $fila['Nombre'];
                $apellido = $fila['Apellido'];

                echo 'Nombre: ' . $nombre . '<br>';
                echo 'Apellido: ' . $apellido . '<br>';
                // ... mostrar otros campos que desees ...
                echo '</p>';
            }
        } else {
            echo '<div class="error-message">Error al ejecutar el procedimiento almacenado obtener_clientes.</div>';
        }

    }

    // Verificar si se ha enviado el formulario para obtener datos de empleado
    if (isset($_POST['obtenerEmpleado'])) {
        $idEmpleado = $_POST['idEmpleado'];
        $resultado = ejecutarProcedimientoConParametros($conexion, 'obtener_empleado', $idEmpleado);

        if ($resultado) {
            // Mostrar los resultados obtenidos
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<p>';
                echo 'ID Empleado: ' . $fila['Id_empleado'] . '<br>';
                echo 'ID Datos Empleado: ' . $fila['Id_datos_empleado'] . '<br>';
                // ... mostrar otros campos que desees ...
                echo '</p>';
            }
        } else {
            echo '<div class="error-message">Error al ejecutar el procedimiento almacenado obtener_empleado.</div>';
        }
    }

    // Verificar si se ha enviado el formulario para obtener datos de plato
    if (isset($_POST['obtenerPlatos'])) {
        $resultado = ejecutarProcedimientoSinParametros($conexion, 'obtener_platos');

        if ($resultado) {
            // Mostrar los resultados obtenidos
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<p>';
                echo 'ID Plato: ' . $fila['Id_plato'] . '<br>';
                echo 'Nombre del Plato: ' . $fila['Nombre_del_plato'] . '<br>';
                // ... mostrar otros campos que desees ...
                echo '</p>';
            }
        } else {
            echo '<div class="error-message">Error al ejecutar el procedimiento almacenado obtener_platos.</div>';
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>

    <h2>Obtener Datos de Datos Persona</h2>
    <form method="POST">
        <label>ID Persona:</label>
        <input type="text" name="idPersona" required>
        <input type="submit" name="obtenerDatosPersona" value="Obtener Datos Persona">
    </form>

    <h2>Obtener Clientes</h2>
    <form method="POST">
        <input type="submit" name="obtenerClientes" value="Obtener Clientes">
    </form>

    <h2>Obtener Datos de Empleado</h2>
    <form method="POST">
        <label>ID Empleado:</label>
        <input type="text" name="idEmpleado" required>
        <input type="submit" name="obtenerEmpleado" value="Obtener Empleado">
    </form>

    <h2>Obtener Platos</h2>
    <form method="POST">
        <input type="submit" name="obtenerPlatos" value="Obtener Platos">
    </form>

</body>
</html>
