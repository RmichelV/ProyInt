<?php
session_start();

$navbar = '<ul>
                <li><a href="./inicio.php">Inicio</a></li>
                <li><a href="#atractivos">Atractivos</a></li>
				<li><a href="./hotel.php">Hotel</a></li>
				<li><a href="">Restaurante</a></li>';
if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    $navbar .= "<li><a href='#'>Bienvenido $usuario</a></li>";

    if ($_SESSION["Id_persona"] == 1) {
        $navbar .= '<li><a href="control.php">Control</a></li>';
    }

    $navbar .= '<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>';

    if (isset($_SESSION["Id_cliente"])) {
        $clienteId = $_SESSION["Id_cliente"];
        
    }

} else {
    $navbar .= '<li><a href="iniciar_sesion.php">Iniciar Sesión</a></li>';
}

$navbar .= '</ul>';

if (isset($_COOKIE["usuario"])) {
    $nombre = $_COOKIE["usuario"];
    // Hacer algo con el valor de la cookie
}

// Lógica de procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $idTour = $_POST["tour"];
    $cantidad = $_POST["cantidad"];
    $fecha = $_POST["fecha"];
    $idCliente = $_SESSION["Id_cliente"];

    // Realizar la conexión a la base de datos
	$servername = "207.244.255.46";
	$username = "ratiosof12x_turismo";
	$password = 'Iq#rt$^*$ZYb';
	$escaped_password = addslashes($password);
	$dbname = "ratiosof12x_bd_turismo";
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar la reserva en la tabla reserva_tour
    $sql = "INSERT INTO RESERVA_TOUR (Id_tour, Cantidad, Fecha_de_la_actividad, Id_cliente)
            VALUES ('$idTour', '$cantidad', '$fecha', '$idCliente')";

    if ($conn->query($sql) === TRUE) {
        echo "Felicidades Tu reserva ha sido un exito :D Recuerda apersonarte a la agencia Sunset Travel para el pago del tour, tienes hasta 48 horas para pagar o si no la reserva se borrara :( puedes comunicarte con la agencia para coordinar otro metodo de pago a traves de la linea 78827517 :D ";
    } else {
        echo "Error al realizar la reserva: " . $conn->error;
    }

    // Cerrar conexión
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
		<style>
			/* Estilo personalizado */
			body {
				background-color: #f2f2f2;
				color: #333333;
				font-family: Arial, sans-serif;
			}

			header {
				background-color: #333333;
				color: #ffffff;
				padding: 1em;
			}

			header h1 {
				margin: 0;
				font-size: 2em;
			}

			nav ul {
				margin: 0;
				padding: 0;
				list-style-type: none;
			}

			nav ul li {
				display: inline;
				margin-right: 1em;
			}

			nav ul li a {
				color: #ffffff;
				text-decoration: none;
			}

			section {
				margin: 2em;
			}

			section h2 {
				margin-top: 0;
			}

			form {
				background-color: #ffffff;
				padding: 1em;
				border-radius: 5px;
			}

			form label {
				display: block;
				margin-bottom: 0.5em;
			}

			form input,
			form select {
				width: 100%;
				padding: 0.5em;
				margin-bottom: 1em;
				border-radius: 3px;
				border: 1px solid #cccccc;
			}

			form input[type="submit"] {
				background-color: #333333;
				color: #ffffff;
				border: none;
				cursor: pointer;
			}

			footer {
				background-color: #333333;
				color: #ffffff;
				padding: 1em;
				text-align: center;
			}

			footer ul {
				margin: 0;
				padding: 0;
				list-style-type: none;
				display: flex;
				justify-content: center;
			}

			footer ul li {
				margin-right: 1em;
			}

			footer ul li a {
				color: #ffffff;
				text-decoration: none;
			}
		</style>
	</head>
	<body>

		<!-- Header -->
		<header id="header">
			<h1>SUNSET TRAVEL</h1>
			<nav>
				<?php echo $navbar; ?>
			</nav>
		</header>

		<!-- Formulario de reserva -->
		<section>
			<h2>Reservar Tour</h2>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
				<div class="row gtr-uniform">
					<div class="col-6 col-12-xsmall">
						<label for="tour">Seleccionar Tour:</label>
						<select name="tour" id="tour" required>
							<option value="" disabled selected>Seleccione un tour</option>
							<option value="1">La Paz - City tour - Full day - Precio Bs. 90</option>
							<option value="2">Nevado Chacaltaya - Full day - Precio Bs. 110</option>
							<option value="3">Copacabana - Full day - Precio Bs. 120</option>
							<option value="4">Copacabana - 2 días 1 noche - Precio Bs. 300</option>
							<option value="5">Death-Road - Full day - Precio Bs. 450</option>
							<option value="6">Pampas de Yacuma - 3 días 2 noches - Precio Bs. 1250</option>
							<option value="7">Salar de Uyuni - Full Day - Precio Bs. 450</option>
							<option value="8">Salar de Uyuni - 2 días 1 noche - Precio Bs. 550</option>
							<option value="9">Salar de Uyuni - 3 días 1 noche - Precio Bs. 850</option>
						</select>
					</div>
					<div class="col-6 col-12-xsmall">
						<label for="cantidad">Cantidad:</label>
						<input type="number" name="cantidad" id="cantidad" min="1" required>
					</div>
					<div class="col-6 col-12-xsmall">
						<label for="fecha">Fecha:</label>
						<input type="date" name="fecha" id="fecha" required>
					</div>
					<div class="col-12">
						<ul class="actions">
							<li><input type="submit" value="Reservar" class="primary" /></li>
						</ul>
					</div>
				</div>
			</form>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<!-- Icons -->
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
				<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
			</ul>
		</footer>

		<!-- Scripts -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/jquery.poptrox.min.js"></script>
		<script src="../assets/js/jquery.scrolly.min.js"></script>
		<script src="../assets/js/jquery.scrollex.min.js"></script>
		<script src="../assets/js/browser.min.js"></script>
		<script src="../assets/js/breakpoints.min.js"></script>
		<script src="../assets/js/util.js"></script>
		<script src="../assets/js/main.js"></script>

	</body>
</html>
