<!-- inicio.php -->
<?php
session_start();
$navbar = '<ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="atractivo.php">Atractivos</a></li>
				<li><a href="hotel.php">Hotel</a></li>
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

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Presidente</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assetsHotel/css/main.css" />
		<noscript><link rel="stylesheet" href="../assetsHotel/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

			<header id="header">
				<h1>SUNSET TRAVEL</h1>
				<nav>
					<ul>
					<?php echo $navbar; ?>
					</ul>
				</nav>
			</header>

			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>Hotel Presidente</h2>
					</header>
					<p>Te damos la bienvenida <strong>Hotel Presidente</strong> Un lugar donde te podras hospedar comodo<br/>
					una de las mejores experiencias <a href="https://html5up.net/license">Busacanos en nuestras redes sociales</a>.</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Por que escogernos</h2>
					</header>
					<p>El Hotel Presidente ofrece un alojamiento moderno en el centro de La Paz, a una manzana de la pintoresca iglesia de San Francisco. El Oasis Club cuenta con un spa y una piscina climatizada con vistas panorámicas.
						Las habitaciones del Hotel Presidente son acogedoras y tienen ventanales iluminados y ropa de cama neutra pero decorativa. Todas están equipadas con TV por cable y conexión Wi-Fi gratuita.
						Los huéspedes del Hotel Presidente pueden utilizar el gimnasio bien equipado. También podrán relajarse con un masaje de aromaterapia perfumado.
						El Hotel Presidente cuenta con 2 restaurantes y servicio de habitaciones 24 horas. El restaurante La Bella Vista sirve </p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Nuestros Servicios</h2>
					</header>
					<p>El Hotel Presidente cuenta con 2 restaurantes y servicio de habitaciones 24 horas. El restaurante La Bella Vista sirve especialidades 
						regionales y La cafetería La Kantuta, una gran variedad de cócteles exóticos. Todos los días se sirve un desayuno buffet.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Habitaciones</h2>
						<p>Aqui te mosntraremos algunas de nuestras distintas habitaciones</p>
					</header>

						<div class="gallery">
							<article class="from-left">
								<a href="../imagesHotel/pcom/01.jpg" class="image fit"><img src="../imagesHotel/pam1/01.jpg" title="Simple" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="../imagesHotel/pcom/02.jpg" class="image fit"><img src="../imagesHotel/pam1/02.jpg" title="Doble" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="../imagesHotel/pcom/03.jpg" class="image fit"><img src="../imagesHotel/pam1/03.jpg" title="Simple" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="../imagesHotel/pcom/04.jpg" class="image fit"><img src="../imagesHotel/pam1/04.jpg" title="Simple" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="../imagesHotel/pcom/05.jpg" class="image fit"><img src="../imagesHotel/pam1/05.jpg" title="Simple" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="../imagesHotel/pcom/06.jpg" class="image fit"><img src="../imagesHotel/pam1/06.jpg" title="Simple" alt="" /></a>
							</article>
						</div>
				</div>
			</section>

			<section id="res" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Reserva tu habitacion</h2>
					</header>
					<div class="card">
						<img src="../imagesHotel/hhotel/02.jpg" alt="Hotel Room">
						<div class="card-content">
						<p>Habitacion doble</p>
						<p>Price: $150 por noche</p>
						<a href="#" class="btn">Reservar</a>
						</div>
					</div>
					<div class="card" class="box">
						<img src="../imagesHotel/hhotel/01.jpg" alt="Hotel Room">
						<div class="card-content">
						<p>Habitacion doble</p>
						<p>Price: $250 por noche</p>
						<a href="#" class="btn">Reservar</a>
						</div>
					</div>
					<div class="card">
						<img src="../imagesHotel/hhotel/03.jpg" alt="Hotel Room">
						<div class="card-content">
						<p>Habitacion doble</p>
						<p>Price: $350 por noche</p>
						<a href="#" class="btn">Reservar</a>
						</div>
					</div>
					<div class="card">
						<img src="../imagesHotel/hhotel/04.jpg" alt="Hotel Room">
						<div class="card-content">
						<p>Habitacion doble</p>
						<p>Price: $450 por noche</p>
						<a href="#" class="btn">Reservar</a>
						</div>
					</div>
					<div class="card">
						<img src="../imagesHotel/hhotel/05.jpg" alt="Hotel Room">
						<div class="card-content">
						<p>Habitacion doble</p>
						<p>Price: $550 por noche</p>
						<a href="#" class="btn">Reservar</a>
						</div>
					</div>
				</div>
			</section>

			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Tu opinion.</h2>
						<p>Tu opinion es importante pata nosotros.</p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="fields">
								<div class="field half"><input type="text" name="nombre" placeholder="nombre" /></div>
								<div class="field half"><input type="email" name="email" placeholder="Email" /></div>
								<div class="field"><textarea name="Mensaje" placeholder="Mensaje" rows="6"></textarea></div>
							</div>
							<ul class="actions special">
								<li><input type="submit" value="Enviar" /></li>
							</ul>
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
					</ul>
			</footer>

		<!-- Scripts -->
			<script src="../assetsHotel/js/jquery.min.js"></script>
			<script src="../assetsHotel/js/jquery.poptrox.min.js"></script>
			<script src="../assetsHotel/js/jquery.scrolly.min.js"></script>
			<script src="../assetsHotel/js/jquery.scrollex.min.js"></script>
			<script src="../assetsHotel/js/browser.min.js"></script>
			<script src="../assetsHotel/js/breakpoints.min.js"></script>
			<script src="../assetsHotel/js/util.js"></script>
			<script src="../assetsHotel/js/main.js"></script>

	</body>
</html>