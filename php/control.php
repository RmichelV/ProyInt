<!DOCTYPE html>
<html>
<head>
    <title>Control de tablas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .no-records {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Tablas</h1>
    <form method="post" action="control.php">
        <input type="submit" name="clientes" value="Clientes">
        <input type="submit" name="empleados" value="Empleados">
        <input type="submit" name="reserva_tour" value="Reserva_Tour">
        <input type="submit" name="procedimientos" value="Procedimientos Almacenados">
    </form>

    <?php
    // Conexión a la base de datos
    $servername = "207.244.255.46";
    $username = "ratiosof12x_turismo";
    $password = "Iq#rt$^*$ZYb";
    $database = "ratiosof12x_bd_turismo";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Obtener los datos de las tablas correspondientes al botón presionado
    if (isset($_POST["clientes"])) {
        $query = "SELECT c.Id_cliente, p.Nombre, p.Apellido, t.Tipo_de_cliente
                  FROM cliente c
                  INNER JOIN datos_persona p ON c.Id_persona = p.Id_persona
                  INNER JOIN tipo_de_cliente t ON c.Id_tipo_de_cliente = t.Id_tipo_de_cliente";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<h2>Tabla de Clientes</h2>";
            echo "<table>
                    <tr>
                        <th>Id Cliente</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo de Cliente</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Id_cliente"] . "</td>
                        <td>" . $row["Nombre"] . "</td>
                        <td>" . $row["Apellido"] . "</td>
                        <td>" . $row["Tipo_de_cliente"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='no-records'>No se encontraron clientes.</div>";
        }
    } elseif (isset($_POST["empleados"])) {
        $query = "SELECT e.Id_empleado, p.Nombre, p.Apellido, c.Cargo
                  FROM empleado e
                  INNER JOIN datos_empleado de ON e.Id_datos_empleado = de.Id_datos_empleado
                  INNER JOIN datos_persona p ON de.Id_persona = p.Id_persona
                  INNER JOIN cargo c ON de.Id_cargo = c.Id_cargo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<h2>Tabla de Empleados</h2>";
            echo "<table>
                    <tr>
                        <th>Id Empleado</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cargo</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Id_empleado"] . "</td>
                        <td>" . $row["Nombre"] . "</td>
                        <td>" . $row["Apellido"] . "</td>
                        <td>" . $row["Cargo"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='no-records'>No se encontraron empleados.</div>";
        }
    } elseif (isset($_POST["reservas"])) {
        $query = "SELECT r.Id_reserva, p.Nombre, r.Cantidad, r.Fecha_inicio
                  FROM reserva r
                  INNER JOIN cliente c ON r.Id_cliente = c.Id_cliente
                  INNER JOIN datos_persona p ON c.Id_persona = p.Id_persona";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<h2>Tabla de Reservas</h2>";
            echo "<table>
                    <tr>
                        <th>Id Reserva</th>
                        <th>Nombre Cliente</th>
                        <th>Cantidad</th>
                        <th>Fecha de Inicio</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Id_reserva"] . "</td>
                        <td>" . $row["Nombre"] . "</td>
                        <td>" . $row["Cantidad"] . "</td>
                        <td>" . $row["Fecha_inicio"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='no-records'>No se encontraron reservas.</div>";
        }
    } elseif (isset($_POST["reserva_tour"])) {
        $query = "SELECT * FROM reserva_tour";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<h2>Tabla de reserva_tour</h2>";
            echo "<table>
                    <tr>
                        <th>Id_reserva_tour</th>
                        <th>Id_tour</th>
                        <th>Cantidad</th>
                        <th>Fecha_de_la_actividad</th>
                        <th>Id_cliente</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Id_reserva_tour"] . "</td>
                        <td>" . $row["Id_tour"] . "</td>
                        <td>" . $row["Cantidad"] . "</td>
                        <td>" . $row["Fecha_de_la_actividad"] . "</td>
                        <td>" . $row["Id_cliente"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='no-records'>No se encontraron registros en la tabla reserva_tour.</div>";
        }
    } elseif (isset($_POST["procedimientos"])) {
        // Aquí puedes redirigir a la página de procedimientos.php
        header("Location: procedimientos.php");
        exit(); // Asegúrate de usar exit() después de la redirección para detener la ejecución del código actual
    }

    $conn->close();
    ?>
</body>
</html>
