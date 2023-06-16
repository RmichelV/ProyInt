<?php
session_start();
$mensaje = "";

if (isset($_SESSION["usuario"])) {
    // Si el usuario ya ha iniciado sesión, redirigir a inicio.php
    header("Location: inicio.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "rmichelvBD";
    $password_db = "t3qu13r0Sql";
    $database = "ProyectoIntegrador";

    $conn = new mysqli($servername, $username, $password_db, $database);

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para verificar el correo y contraseña en la tabla datos_persona
    $sql = "SELECT * FROM datos_persona WHERE Correo = '$correo' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si se encontró una coincidencia, iniciar sesión
        $row = $result->fetch_assoc();
        $_SESSION["usuario"] = $row["Nombre"];
        $_SESSION["Id_persona"] = $row["Id_persona"];

        // Obtener el Id_cliente correspondiente a la Id_persona
        $sqlCliente = "SELECT Id_cliente FROM cliente WHERE Id_persona = '" . $row["Id_persona"] . "'";
        $resultCliente = $conn->query($sqlCliente);
        if ($resultCliente->num_rows > 0) {
            $rowCliente = $resultCliente->fetch_assoc();
            $_SESSION["Id_cliente"] = $rowCliente["Id_cliente"];
        }

        // Establecer la cookie
        $cookie_name = "usuario";
        $cookie_value = $row["Nombre"];
        $cookie_expiration = time() + (86400 * 30); // Caduca en 30 días (puedes ajustar la duración según tus necesidades)
        setcookie($cookie_name, $cookie_value, $cookie_expiration, "/"); // "/" indica que la cookie es válida para todo el sitio

        // Redirigir a inicio.php
        header("Location: inicio.php");
        exit();
    } else {
        // Si no se encontró una coincidencia, mostrar mensaje de error
        $mensaje = "Correo o contraseña incorrectos";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        p {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="">
            <label for="correo">Correo:</label><br>
            <input type="text" id="correo" name="correo" required><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Iniciar Sesión">
        </form>
        <p><?php echo $mensaje; ?></p>
        <p>¿Aún no tienes una cuenta? <a href="registro.php">Regístrate</a></p>
    </div>
</body>
</html>
