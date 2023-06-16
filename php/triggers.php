<!DOCTYPE html>
<html>
<head>
    <title>Interacción con Triggers</title>
</head>
<body>
    <h1>Interacción con Triggers</h1>

    <?php
    // Datos de conexión a la base de datos
    $host = 'localhost';
    $usuario = 'rmichelvBD';
    $contraseña = 't3qu13r0Sql';
    $base_de_datos = 'ProyectoIntegrador';

    // Conexión a la base de datos
    $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

    // Verificar si se ha enviado el formulario para insertar en RESERVA_HABITACION
    if (isset($_POST['reservarHabitacion'])) {
        $idHabitacion = $_POST['idHabitacion'];
        $cantidad = $_POST['cantidad'];

        // Insertar en la tabla RESERVA_HABITACION
        $sql = "INSERT INTO RESERVA_HABITACION (Id_habitacion, Cantidad) VALUES ('$idHabitacion', '$cantidad')";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo 'Se ha realizado la reserva de habitación exitosamente.';
        } else {
            echo 'Error al realizar la reserva de habitación: ' . mysqli_error($conexion);
        }
    }

    // Verificar si se ha enviado el formulario para insertar en RESERVA_MESA
    if (isset($_POST['reservarMesa'])) {
        $idMesa = $_POST['idMesa'];
        $cantidadMesas = $_POST['cantidadMesas'];

        // Insertar en la tabla RESERVA_MESA
        $sql = "INSERT INTO RESERVA_MESA (Id_tipo_de_mesa, Cantidad_de_mesas) VALUES ('$idMesa', '$cantidadMesas')";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo 'Se ha realizado la reserva de mesa exitosamente.';
        } else {
            echo 'Error al realizar la reserva de mesa: ' . mysqli_error($conexion);
        }
    }

    // Verificar si se ha enviado el formulario para insertar en RESERVA_TRANSFER
    if (isset($_POST['reservarTransfer'])) {
        $idTransporte = $_POST['idTransporte'];
        $cantidadPax = $_POST['cantidadPax'];

        // Insertar en la tabla RESERVA_TRANSFER
        $sql = "INSERT INTO RESERVA_TRANSFER (Id_tipo_de_transporte, Cantidad_de_pax) VALUES ('$idTransporte', '$cantidadPax')";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo 'Se ha realizado la reserva de transfer exitosamente.';
        } else {
            echo 'Error al realizar la reserva de transfer: ' . mysqli_error($conexion);
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>

    <h2>Reserva de Habitación</h2>
    <form method="POST">
        <label>ID de Habitación:</label>
        <input type="text" name="idHabitacion" required>
        <label>Cantidad:</label>
        <input type="text" name="cantidad" required>
        <input type="submit" name="reservarHabitacion" value="Reservar">
    </form>

    <h2>Reserva de Mesa</h2>
    <form method="POST">
        <label>ID de Mesa:</label>
        <input type="text" name="idMesa" required>
        <label>Cantidad de Mesas:</label>
        <input type="text" name="cantidadMesas" required>
        <input type="submit" name="reservarMesa" value="Reservar">
    </form>

    <h2>Reserva de Transfer</h2>
    <form method="POST">
        <label>ID de Transporte:</label>
        <input type="text" name="idTransporte" required>
        <label>Cantidad de Pax:</label>
        <input type="text" name="cantidadPax" required>
        <input type="submit" name="reservarTransfer" value="Reservar">
    </form>
</body>
</html>
