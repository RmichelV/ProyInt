<?php
session_start();
$navbar = '<ul>
                <li><a href="./inicio.php">Inicio</a></li>
                <li><a href="atractivo.php">Atractivos</a></li>
				<li><a href="./hotel.php">Hotel</a></li>
				<li><a href="">Restaurante</a></li>';
if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    $navbar .= "<li><a href='#'>Bienvenido $usuario</a></li>";

    if ($_SESSION["Id_persona"] == 1) {
        $navbar .= '<li><a href="control.php">Control</a></li>';
    }

    $navbar .= '<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>';

} 
else {
    $navbar .= '<li><a href="iniciar_sesion.php">Iniciar Sesión</a></li>';
}


$navbar .= '</ul>';

if (isset($_COOKIE["usuario"])) {
    $nombre = $_COOKIE["usuario"];
    // Hacer algo con el valor de la cookie
}

// Conexión a la base de datos
$servername = "207.244.255.46";
$username = "ratiosof12x_turismo";
$password = 'Iq#rt$^*$ZYb';
$dbname = "ratiosof12x_bd_turismo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $nacionalidad = $_POST["nacionalidad"];
    $comunicacion = $_POST["comunicacion"];
    $numero_comunicacion = $_POST["numero_comunicacion"];
    $tipo_documento = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $id_tipo_cliente = 1;

    // Verificar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    }

    // Obtener el ID de la nacionalidad
    $sql_nacionalidad = "SELECT Id_nacionalidad FROM NACIONALIDAD WHERE Id_nacionalidad = $nacionalidad";
    $result_nacionalidad = $conn->query($sql_nacionalidad);

    if ($result_nacionalidad->num_rows == 0) {
        die("La nacionalidad seleccionada no es válida.");
    }

    $row_nacionalidad = $result_nacionalidad->fetch_assoc();
    $id_nacionalidad = $row_nacionalidad["Id_nacionalidad"];

    // Obtener el ID del tipo de documento
    $sql_documento = "SELECT Id_documento FROM DOCUMENTO WHERE Id_documento = $tipo_documento";
    $result_documento = $conn->query($sql_documento);

    if ($result_documento->num_rows == 0) {
        die("El tipo de documento seleccionado no es válido.");
    }

    $row_documento = $result_documento->fetch_assoc();
    $id_tipo_documento = $row_documento["Id_documento"];

    // Obtener el ID del tipo de comunicación
    $sql_comunicacion = "SELECT Id_comunicacion FROM COMUNICACION WHERE Id_comunicacion = $comunicacion";
    $result_comunicacion = $conn->query($sql_comunicacion);

    if ($result_comunicacion->num_rows == 0) {
        die("El tipo de comunicación seleccionado no es válido.");
    }

    $row_comunicacion = $result_comunicacion->fetch_assoc();
    $id_comunicacion = $row_comunicacion["Id_comunicacion"];

    // Insertar los datos en la tabla datos_persona
    $sql = "INSERT INTO DATOS_PERSONA (Nombre, Apellido, Correo, Id_nacionalidad, Id_comunicacion, Numero_de_comunicacion, Id_tipo_de_documento, Numero_de_documento, Password) VALUES ('$nombre', '$apellido', '$correo', $id_nacionalidad, $id_comunicacion, '$numero_comunicacion', $id_tipo_documento, '$numero_documento', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Obtener el ID de la persona insertada
        $id_persona = $conn->insert_id;

        // Insertar los datos en la tabla cliente
        $sql_cliente = "INSERT INTO CLIENTE (Id_persona, Id_tipo_de_cliente) VALUES ($id_persona, $id_tipo_cliente)";

        if ($conn->query($sql_cliente) === TRUE) {
            // Redirigir al usuario a inicio.php
            header("Location: inicio.php");
            exit();
        } else {
            echo "Error al registrar los datos del cliente: " . $conn->error;
        }
    } else {
        echo "Error al registrar los datos: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Big Picture by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<script src="../js/home.js" defer></script>
		
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>SUNSET TRAVEL</h1>
				<nav>
					<?php echo $navbar; ?>
				</nav>
			</header>
<!-- Contact -->
<section id="contact" class="main style3 secondary">
    <div class="content">
        <header>
            <h2>CREA UNA CUENTA</h2>
            <p>Regístrate o inicia sesión en tu cuenta para hacer tus reservas</p>
        </header>

        <div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table>
                    <tr>
                        <td>NOMBRE:</td>
                        <td><input type="text" name="nombre" required></td>
                    </tr>
                    <tr>

					<tr>
                        <td>APELLIDO:</td>
                        <td><input type="text" name="apellido" required></td>
                    </tr>

                    <tr>

                        <td>CORREO ELECTRONICO:</td>
                        <td><input type="text" name="correo" required></td>
                    </tr>

					<tr>
                        <td>NACIONALIDAD:</td>
						<td>
						<select name="nacionalidad" required>
            				<option value="">Seleccionar</option>
            				<?php
							$sql_nacionalidades = "SELECT * FROM nacionalidad";
							$result_nacionalidades = $conn->query($sql_nacionalidades);

							if ($result_nacionalidades->num_rows > 0) {
								while ($row = $result_nacionalidades->fetch_assoc()) {
									echo "<option value='" . $row["Id_nacionalidad"] . "'>" . $row["Nacionalidad"] . "</option>";
								}
							}
							?>
       					 </select>
						</td>
                    </tr>
					
					<tr>
                        <td>TIPO DE COMUNICACION:</td>
						<td>
							<select name="comunicacion" required>
								<option value="">Seleccionar</option>
								<?php
								$sql_comunicaciones = "SELECT * FROM comunicacion";
								$result_comunicaciones = $conn->query($sql_comunicaciones);

								if ($result_comunicaciones->num_rows > 0) {
									while ($row = $result_comunicaciones->fetch_assoc()) {
										echo "<option value='" . $row["Id_comunicacion"] . "'>" . $row["Tipo_de_comunicacion"] . "</option>";
									}
								}
								?>
							</select>
						</td>
                    </tr>

                    <tr>
                        <td>NUMERO DE TELEFONO:</td>
                        <td><input type="text" name="numero_comunicacion" required></td>
                    </tr>

					<tr>
                        <td>TIPO DE DOCUMENTO:</td>
                        <td>
						<select name="tipo_documento" required>
							<option value="">Seleccionar</option>
							<?php
							$sql_documentos = "SELECT * FROM documento";
							$result_documentos = $conn->query($sql_documentos);

							if ($result_documentos->num_rows > 0) {
								while ($row = $result_documentos->fetch_assoc()) {
									echo "<option value='" . $row["Id_documento"] . "'>" . $row["Tipo_de_documento"] . "</option>";
								}
							}
							?>
						</select>
						</td>
                    </tr>

					<tr>
                        <td>NUMERO DE DOCUMENTO:</td>
                        <td><input type="text" name="numero_documento" required></td>
                    </tr>

					<tr>
                        <td>CONTRASEÑA:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
					
					<tr>
                        <td>CONFIRMAR CONTRASEÑA:</td>
                        <td><input type="password" name="confirm_password" required></td>
                    </tr>


                    <tr>
                        <td colspan="2"><br><input type="submit" value="Registrar" style="background-color: lightskyblue;"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>

		<!-- Footer -->
        <footer id="footer">

<!-- Icons -->
    <ul class="icons">
        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
    </ul>

<!-- Menu -->
    <ul class="menu">
        <li>&copy; SUNSET TRAVEL. All rights reserved.</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
    </ul>

</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
