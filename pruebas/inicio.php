<!-- inicio.php -->
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

<!-- Intro -->
<section id="intro" class="main style1 dark fullscreen">
	<div class="content">
		<header>
			<h2>SUNSET TRAVEL</h2>
		</header>
		<p style="font-size: 24px; font-weight: bold;">
			"Descubre el mundo con nuestra agencia de viajes: <strong>aventuras inolvidables, destinos increíbles y recuerdos para toda la vida.</strong>"
		</p>
		<footer>
			<a href="#one" class="button style2 down">More</a>
		</footer>
	</div>
</section>



		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>EXPERIENCIAS INOLVIDABLES</h2>
					</header>
					<p> Te proporsionamos las mejores actividades para cada ubicacion que vayas a visitar. Los lugares mas bonitos y llamativos esperan por tu llegada, haz tu reserva ya para no perderte de un viaje inolvidable</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>VIAJES INCREIBLES</h2>
					</header>
					<p>Al explorar lugares diferentes, tu mente se abre a nuevas perspectivas y estimulantes estímulos visuales, auditivos y culturales. El cambio de escenario y la desconexión de las responsabilidades habituales permiten liberar el estrés acumulado y revitalizar el espíritu. Además, al sumergirte en culturas diversas, te encuentras con nuevas formas de pensar y vivir.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>



<!-- Work -->
<section id="work" class="main style3 primary">
	<div class="content">
		<header>
			<h2>¿Estas planeando visitar algun lugar nuevo estas vacaciones?</h2>
			<p>Descubre un mundo de posibilidades con nuestra agencia de viajes: experiencias únicas, destinos fascinantes y servicios personalizados que harán realidad tus sueños de viajar.</p>
			<div style="text-align: center;">
				<img src="../images/work.png" alt="Descripción de la imagen" style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
			</div>
		</header>
	</div>
</section>

<section class="image-gallery" style="background-color: transparent;">
	<div class="gallery" style="margin: 0 auto;">
       
		<!--Chacaltaya-->
			<div class="atr" id="atractivos">
				<form action="" method="get" class="form-atr">
					<figure class="fig_atr">
						<img src="../img/Chacaltaya.jpeg" alt="Chacaltaya" class="img-atr">
					</figure>
					<article class="art-atr">
						<h1 class="h1-atr"> Chacaltaya</h1>
						<p class="p-atr">   
						Descubre la grandiosidad de los Andes bolivianos en el Chacaltaya, un destino de ensueño para los amantes de la naturaleza y la aventura. Con sus vistas panorámicas impresionantes y su atmósfera cristalina, este majestuoso pico te transportará a un mundo de belleza indescriptible. Desde caminatas emocionantes hasta observaciones astronómicas fascinantes, el Chacaltaya te ofrece una experiencia inolvidable en uno de los entornos más imponentes del planeta. ¡Sumérgete en la grandeza de los Andes y descubre un paraíso natural en lo más alto!
						</p>
					</article>
					<div class="btns-div">
						<input type="button" value="Ver Más" class="btn" id="btn-vm-ch">
						<input type="button" value="Reservar"  class="btn-rv-ch btn" id="btnR">
					</div>
				</form>
			</div>

		<!-- Modal para Chacaltaya -->
			<div id="modalChacaltaya" class="modal">
				<div class="modal-content">
					<span class="close c_ch">&times;</span>
					<h2>Chacaltaya</h2>
					<img src="../img/ChacaltayaVM.jpeg" alt="ChacaltayaVerMas">
					<p class="p-vm">
						¡Bienvenidos a una experiencia inolvidable en el Chacaltaya! te invitamos a descubrir la imponente belleza de esta montaña legendaria. Aunque el glaciar haya desaparecido, aún podrás deleitarte con vistas panorámicas y una aventura inigualable.<br><br>

						Nuestro exclusivo tour panorámico te llevará hasta la cima de Chacaltaya, donde serás testigo de paisajes de ensueño. Imagina contemplar valles interminables, montañas majestuosas y un horizonte que te dejará sin aliento. Nuestros guías expertos te acompañarán en esta travesía, compartiendo conocimientos sobre la historia y la geología de esta región única.<br><br>

						Además, podrás disfrutar de emocionantes senderos que te llevarán a rincones escondidos y vistas espectaculares. La belleza natural te envolverá mientras caminas en armonía con la naturaleza, viviendo una experiencia auténtica y enriquecedora.<br><br>

						No pierdas la oportunidad de visitar las lagunas cercanas, como la impresionante Laguna Tuni, donde podrás sumergirte en la serenidad de aguas cristalinas rodeadas de un entorno natural sorprendente.<br><br>

						El Chacaltaya te espera con los brazos abiertos, listo para cautivarte con su grandeza y encanto. ¡Reserva tu tour con nosotros y descubre una aventura inolvidable en uno de los destinos más fascinantes de Bolivia!<br><br>

						¡Reserva ahora y déjanos hacer de tu visita al Chacaltaya un viaje inolvidable!
					</p>
					<button class="btn-rv-ch btn">Reservar</button>
				</div>
			</div>

		<!--City Tour-->
			<div class="atr">
				<form action="" method="get" class="form-atr">
					<figure class="fig_atr">
					<img src="../img/La_Paz.jpeg" alt="La Paz" class="img-atr">
					</figure>
					<article class="art-atr">
					<h1 class="h1-atr">City Tour</h1>
					<p class="p-atr">
						Descubre la magia de La Paz en un city tour clásico. Recorre la Plaza Murillo, visita el mercado de las Brujas y admira las vistas desde Killi Killi, recorre la ciudad por los aires mediante los distintos Telefericos que te llevaran desde lo más alto hasta lo más bajo de la ciudad. ¡Explora lo mejor de esta fascinante ciudad boliviana!
					</p>
					</article>
					<div class="btns-div">
						<input type="button" value="Ver Más" class="btn" id="btn-vm-ct">
						<input type="button" value="Reservar" class="btn-rv-ct btn">
					</div>
					
				</form>
			</div>

		<!-- Modal para City Tour-->
			<div id="modalCityTour" class="modal">
				<div class="modal-content">
					<span class="close c_ct">&times;</span>
					<h2>City Tour Clasico</h2>
					<img src="../img/LaPazVM.jpg" alt="La Paz City Tour">
					<p class="p-vm">
						¡Explora la esencia cultural de La Paz en nuestro City Tour Clásico!<br><br>

						¡Bienvenidos a La Paz, una ciudad llena de historia, cultura y colores vibrantes! Como agente de viajes, te invitamos a un emocionante City Tour Clásico para descubrir los tesoros ocultos y los lugares más emblemáticos de esta fascinante ciudad.<br><br>

						Nuestro recorrido te llevará a través de las calles adoquinadas de La Paz, donde podrás apreciar la arquitectura colonial y moderna que se entrelazan en una fusión única. Admira la majestuosidad de la Catedral Metropolitana y explora la Plaza Murillo, el corazón histórico y político de la ciudad.<br><br>

						Continuaremos nuestro viaje hacia el famoso Mercado de las Brujas, un lugar lleno de misterio y magia, donde encontrarás una variedad de productos tradicionales y curiosos. Sumérgete en la cultura local mientras paseas por los coloridos puestos y descubres hierbas medicinales, amuletos y objetos místicos.<br><br>

						Nuestro recorrido también incluye una visita al fascinante Museo de la Coca, donde aprenderás sobre la importancia cultural y medicinal de esta planta sagrada en la región. Además, te llevaremos al Museo de Arte Contemporáneo para que explores las obras de talentosos artistas bolivianos y latinoamericanos.<br><br>

						No puedes perder la oportunidad de ascender en el teleférico, una forma única y panorámica de apreciar la belleza de La Paz desde las alturas. Disfruta de vistas panorámicas de la ciudad, los cerros y las montañas circundantes mientras te desplazas en este moderno sistema de transporte.<br><br>

						Terminaremos nuestro recorrido con una visita al impresionante Valle de la Luna, un paisaje lunar lleno de formaciones rocosas y colinas erosionadas. Este lugar te dejará maravillado y te brindará la oportunidad de tomar fotografías increíbles.<br><br>

						¡Únete a nuestro City Tour Clásico y sumérgete en la rica cultura y la belleza de La Paz! Contáctanos ahora y reserva tu lugar en esta experiencia inolvidable. ¡Te garantizamos una aventura llena de descubrimientos y momentos memorables en la ciudad más intrigante de Bolivia!<br><br>
					</p>
					<button class="btn-rv-ct btn">Reservar</button>
				</div>
			</div>

		<!--Copacabana-->
			<div class="atr">
				<form action="" method="get" class="form-atr">
					<figure class="fig_atr">
					<img src="../img/Copacabana.jpeg" alt="Copacabana" class="img-atr">
				</figure>
				<article class="art-atr">
					<h1 class="h1-atr">Copacabana</h1>
					<p class="p-atr">
						Ubicado en las orillas del majestuoso Lago Titicaca, en Bolivia, se encuentra el encantador pueblo costero de Copacabana. Con su combinación única de espiritualidad, historia y belleza natural, Copacabana cautiva los corazones de los visitantes. El imponente edificio de la Basílica de Nuestra Señora de Copacabana es un importante destino de peregrinación religiosa. Además de su aspecto religioso, Copacabana ofrece vistas impresionantes del Lago Titicaca y sus alrededores montañosos
					</p>
				</article>
				<div class="btns-div">
					<input type="button" value="Ver Más" class="btn" id="btn-vm-cp">
					<input type="button" value="Reservar" class="btn-rv-cp btn">
				</div>
				</form>
			</div>

		<!-- Modal para Copacabana -->
			<div id="modalCopacabana" class="modal">
				<div class="modal-content">
					<span class="close c_cp">&times;</span>
					<h2>Tour Copacabana</h2>
					<img src="../img/CopacabanaVM.jpeg" alt="Copacabana">
					<p class="p-vm">
						Día 1:<br>
						Comenzaremos nuestra aventura en la encantadora ciudad de La Paz, desde donde nos dirigiremos en un cómodo vehículo hacia Copacabana, ubicada a orillas del majestuoso Lago Titicaca.<br><br>

						Al llegar a Copacabana, nos dirigiremos a la Basílica de Nuestra Señora de Copacabana, un importante santuario mariano y lugar de peregrinación. Admiraremos la arquitectura colonial de la iglesia y, si tenemos suerte, podremos presenciar una colorida ceremonia religiosa.<br><br>

						Después, disfrutaremos de un delicioso almuerzo con vista al lago, deleitándonos con los sabores tradicionales de la región. A continuación, daremos un paseo por el pintoresco malecón de Copacabana, donde podremos apreciar el hermoso paisaje del Lago Titicaca y explorar los puestos de artesanías locales.<br><br>

						Para culminar el día, nos embarcaremos en una tranquila travesía en bote hacia la Isla del Sol, considerada sagrada por los antiguos incas. Descubriremos los misterios y leyendas que envuelven esta isla mientras exploramos sus senderos y ruinas arqueológicas. Disfrutaremos de una cena tradicional andina en un acogedor alojamiento en la Isla del Sol, donde pasaremos la noche.<br><br>

						Día 2:<br>
						Después de un amanecer mágico en la Isla del Sol, disfrutaremos de un desayuno energético antes de embarcarnos en un paseo en bote de regreso a Copacabana.<br><br>

						De regreso en la ciudad, visitaremos el Museo del Santuario del Sol, donde podremos aprender más sobre la rica historia y cultura de la región. También tendremos tiempo libre para explorar la ciudad a nuestro propio ritmo, disfrutando de su ambiente relajado y descubriendo sus encantos.<br><br>

						Antes de regresar a La Paz, nos deleitaremos con un último almuerzo tradicional en un restaurante local, saboreando los platos típicos bolivianos.<br><br>

						Con recuerdos inolvidables y el espíritu renovado, nos despediremos de Copacabana y emprenderemos el viaje de regreso a La Paz, donde finalizará nuestro tour de dos días.<br><br>

						No pierdas la oportunidad de sumergirte en la magia del Lago Titicaca y explorar la hermosa ciudad de Copacabana. ¡Contáctanos ahora para reservar tu lugar en este tour lleno de paisajes espectaculares, cultura ancestral y experiencias enriquecedoras!
					</p>
					<button class="btn btn-rv-cp">Reservar</button>
				</div>
			</div>

		<!--Camino de La Muerte-->
			<div class="atr">
				<form action="" method="get" class="form-atr">
					<figure class="fig_atr">
						<img src="../img/caminoDeLaMuerte.jpeg" alt="DEATH-ROAD" class="img-atr">
					</figure>
					<article class="art-atr">
						<h1 class="h1-atr">Death Road / Camino de la Muerte</h1>
						<p class="p-atr">
							Descubre la adrenalina y la emoción del Death Road, una famosa atracción turística en Bolivia. También conocida como "Camino de la Muerte", esta antigua ruta de tráfico ahora es un emocionante sendero de ciclismo de montaña que atrae a aventureros de todo el mundo. A medida que desciendes por los vertiginosos acantilados y serpentinas sinuosas, serás recompensado con impresionantes vistas panorámicas de la selva tropical y las montañas circundantes. Es una experiencia única que desafía tus límites y te sumerge en la belleza natural de Bolivia. Si eres amante de la aventura y la emoción, el Death Road es definitivamente una parada obligada en tu itinerario.
						</p>
					</article>
					<div class="btns-div">
						<input type="button" value="Ver Más" class="btn" id="btn-vm-dr">
						<input type="button" value="Reservar" class="btn btn-rv-dr">
					</div>
				</form>
			</div>

		<!-- Modal para Camino de la muerte -->
			<div id="modalCaminoDeLaMuerte" class="modal">
				<div class="modal-content">
					<span class="close c_dr">&times;</span>
					<h2>Death Road</h2>
					<img src="../img/CaminoDeLaMuerteVM.webp" alt="CaminoDeLaMuerte">
					<p class="p-vm">
						¡Experimenta la emoción del Death Road en nuestro tour de día completo!<br><br>

						¡Bienvenido al emocionante tour del Death Road en Bolivia! Prepárate para una experiencia llena de adrenalina y paisajes impresionantes mientras recorres una de las rutas más desafiantes del mundo.<br><br>

						Nuestro día comienza temprano en la mañana con la recogida en tu hotel en La Paz. Desde allí, nos dirigiremos en vehículo hacia la cima de los Andes, donde comenzará nuestra aventura en bicicleta.<br><br>

						Una vez equipados con cascos, bicicletas y todo el equipo necesario, iniciaremos el descenso por el famoso Death Road. Conducirás a través de estrechos caminos serpenteantes, bordeados de acantilados y rodeados de una exuberante vegetación tropical. Sentirás la emoción mientras desciendes a gran velocidad, disfrutando de la increíble sensación de libertad.<br><br>

						Durante el recorrido, haremos paradas estratégicas para descansar, tomar fotografías y admirar los paisajes impresionantes que te rodean. Tendrás la oportunidad de apreciar la majestuosidad de los paisajes montañosos y los valles profundos que se extienden frente a ti.<br><br>

						A mitad del recorrido, disfrutaremos de un merecido descanso y un delicioso almuerzo en un lugar pintoresco. Podrás reponer energías mientras compartes experiencias con otros aventureros.<br><br>

						Finalmente, llegaremos al final del Death Road, donde celebraremos nuestra valentía y el logro de haber superado este desafío. Serás recompensado con una vista panorámica espectacular del paisaje circundante.<br><br>

						Después de esta emocionante aventura, regresaremos a La Paz, donde te dejaremos en tu hotel, lleno de recuerdos inolvidables y la satisfacción de haber conquistado el Death Road.<br><br>

						¡No pierdas la oportunidad de vivir esta experiencia única en el famoso Death Road! Contáctanos ahora para reservar tu lugar en este tour de día completo lleno de emoción y aventura en Bolivia.<br><br>
					</p>
					<button class="btn btn-rv-dr">Reservar</button>
				</div>
			</div>

		<!--Pampas de Yacuma-->
			<div class="atr">
				<form action="" method="get" class="form-atr">
					<figure class="fig_atr">
						<img src="../img/pampasDeYacuma.jpeg" alt="pampasDeYacuma" class="img-atr">
					</figure>
					<article class="art-atr">
						<h1 class="h1-atr">Pampas de Yacuma</h1>
						<p class="p-atr">
							Embárcate en una aventura inolvidable en las Pampas de Yacuma, ubicadas en el norte de Bolivia. Este vasto ecosistema de humedales te sumerge en una exuberante selva tropical, hogar de una increíble diversidad de flora y fauna. Durante tu visita, tendrás la oportunidad de navegar por los ríos serpenteantes, avistar caimanes, anacondas y una gran variedad de aves exóticas. Además, podrás disfrutar de paseos en bote al atardecer, emocionantes excursiones de avistamiento de vida silvestre y sumergirte en las cálidas aguas de los ríos para nadar con los delfines rosados. Las Pampas de Yacuma te ofrecen una experiencia única en contacto directo con la naturaleza salvaje de Bolivia.
						</p>
					</article>
					<div class="btns-div">
						<input type="button" value="Ver Más" class="btn" id="btn-vm-py">
						<input type="button" value="Reservar" class="btn btn-rv-py ">
					</div>
				</form>
			</div>

		<!-- Modal para pampas de yacuma-->
			<div id="modalPampasDeYacuma" class="modal">
				<div class="modal-content">
					<span class="close c_py">&times;</span>
					<h2>Pampas de Yacuma</h2>
					<img src="../img/PampasDeYacumaVM.jpeg" alt="PampasDeYacuma">
					<p class="p-vm">
						¡Explora la exuberante belleza de las Pampas de Yacuma en nuestro tour de 3 días! <br><br>

						Día 1:<br>
						Comenzaremos nuestra emocionante aventura con una recogida en tu hotel en la ciudad de Trinidad. Desde allí, nos dirigiremos en un vehículo cómodo hacia las Pampas de Yacuma, ubicadas en la región amazónica de Bolivia.<br><br>

						A medida que nos adentramos en la selva, podrás apreciar la increíble diversidad de flora y fauna que rodea el área. En el camino, haremos paradas estratégicas para estirar las piernas, disfrutar de vistas panorámicas y fotografiar la belleza natural que nos rodea.<br><br>

						Llegaremos a nuestro alojamiento en las Pampas de Yacuma, donde te recibirán con un delicioso almuerzo. Después de un breve descanso, nos prepararemos para una emocionante excursión en bote por los ríos y canales de las Pampas. Durante el recorrido, tendrás la oportunidad de avistar delfines rosados, caimanes, capibaras y una gran variedad de aves exóticas.<br><br>

						Al finalizar el día, disfrutaremos de una cena tradicional amazónica y descansaremos en nuestro alojamiento en medio de la naturaleza.<br><br>

						Día 2:<br>
						Después de un desayuno energético, nos aventuraremos en un emocionante safari por la selva. Acompañados por guías expertos, exploraremos los senderos ocultos de la selva amazónica, aprendiendo sobre las plantas medicinales, la vida silvestre y las tradiciones indígenas.<br><br>

						Durante el safari, podremos avistar monos, tapires, perezosos y una variedad de aves exóticas. También tendremos la oportunidad de pescar pirañas en las aguas de los ríos amazónicos. ¡Una experiencia emocionante que pondrá a prueba tus habilidades de pesca!<br><br>

						Regresaremos a nuestro alojamiento para disfrutar de un merecido almuerzo y descanso. Por la tarde, navegaremos por los ríos para admirar la hermosa puesta de sol sobre el horizonte amazónico. Una experiencia mágica que no querrás perderte.<br><br>

						Día 3:<br>
						Después de un último desayuno en las Pampas de Yacuma, emprenderemos el viaje de regreso a la ciudad de Trinidad. Durante el trayecto, podrás reflexionar sobre las experiencias vividas y disfrutar de las últimas vistas de la exuberante selva tropical.<br><br>

						Al llegar a Trinidad, te dejaremos en tu hotel, con recuerdos inolvidables de tu aventura en las Pampas de Yacuma.<br><br>

						¡No dejes pasar la oportunidad de explorar la belleza y la vida silvestre de las Pampas de Yacuma en este tour de 3 días! Contáctanos ahora y reserva tu lugar en esta experiencia única en la Amazonía boliviana.
					</p>
					<button class="btn btn-rv-py">Reservar</button>
				</div>
			</div>

		<!--Uyuni-->
			<div class="atr">
				<form action="" method="get" class="form-atr">
					<figure class="fig_atr">
						<img src="../img/Uyuni.jpeg" alt="Uyuni" class="img-atr">
					</figure>
					<article class="art-atr">
						<h1 class="h1-atr">Uyuni</h1>
						<p class="p-atr">
							Descubre la maravilla natural del Salar de Uyuni en Bolivia. Con su vasta extensión de sal blanca y su cielo azul infinito, este lugar te transportará a otro mundo. Podrás caminar sobre el salar y maravillarte con los patrones geométricos que crea la sal cuando se encuentra con el agua. Además, podrás visitar la Isla Incahuasi, una isla cubierta de cactus gigantes que emerge del salar. Durante el atardecer, el Salar de Uyuni se convierte en un espejo gigante, creando un espectáculo visual impresionante. Es una experiencia surrealista que no puedes perderte en tu visita a Bolivia.
						</p>
					</article>
					<div class="btns-div">
						<input type="button" value="Ver Más" class="btn" id="btn-vm-uy">
						<input type="button" value="Reservar" class="btn btn-rv-uy">
					</div>
				</form>
			</div>

		<!-- Modal para  Uyuni -->
		<div id="modalUyuni" class="modal">
			<div class="modal-content">
				<span class="close c_uy">&times;</span>
				<h2>Salar de Uyuni</h2>
				<img src="../img/UyuniVM.jpeg" alt="Uyuni">
				<p class="p-vm">
					¡Embárcate en una mágica expedición de 3 días en el Salar de Uyuni!<br><br>

					Día 1:<br>
					Comenzaremos nuestra increíble aventura con una recogida en tu hotel en Uyuni. Nos dirigiremos hacia el impresionante Salar de Uyuni, el mayor desierto de sal del mundo.<br><br>

					Nuestro primer destino será la Isla Incahuasi, una formación rocosa en medio del salar, conocida por sus cactus gigantes y sus impresionantes vistas panorámicas. Aquí disfrutaremos de un delicioso almuerzo rodeados de un paisaje surrealista.<br><br>

					Continuaremos nuestro viaje hacia el famoso Hotel de Sal, donde tendrás la oportunidad de visitar un museo único y aprender sobre la industria de la sal en la región. Después, nos adentraremos en el corazón del Salar para capturar fotografías creativas y divertidas en el famoso "espejo de sal".<br><br>

					Por la tarde, llegaremos a nuestro alojamiento en un hotel de sal, donde disfrutarás de una cena tradicional y descansarás en un entorno único.<br><br>

					Día 2:<br>
					Después de un desayuno temprano, nos adentraremos aún más en la vastedad del Salar de Uyuni. Conduciremos hacia el sur, donde encontraremos formaciones rocosas y volcanes extintos.<br><br>

					Visitaremos el Cementerio de Trenes, un lugar pintoresco lleno de antiguas locomotoras de vapor. Luego, nos dirigiremos hacia la Laguna Colorada, famosa por su vibrante color rojo debido a la presencia de algas y minerales.<br><br>

					Aquí podrás observar flamencos en su hábitat natural y disfrutar de un paisaje espectacular rodeado de montañas y volcanes. Nos dirigiremos a nuestro alojamiento en un albergue rústico cerca de la Laguna Colorada, donde disfrutaremos de una cena reconfortante y descansaremos para el próximo día.<br><br>

					Día 3:<br>
					En nuestro último día, después del desayuno, visitaremos el Árbol de Piedra, una formación rocosa tallada por la erosión con forma de árbol. Continuaremos nuestro recorrido hacia las Termas de Polques, donde podrás sumergirte en aguas termales naturales y relajarte mientras disfrutas de las vistas panorámicas.<br><br>

					Luego, nos dirigiremos al famoso Desierto de Dali, conocido por su paisaje surrealista y sus formaciones rocosas únicas. Disfrutarás de un almuerzo en medio de este paisaje mágico antes de continuar hacia el Valle de las Rocas, donde podrás explorar formaciones rocosas talladas por el viento y el tiempo.<br><br>

					Finalmente, nos dirigiremos de regreso a Uyuni, donde te dejaremos en tu hotel, con recuerdos inolvidables de esta aventura en el Salar de Uyuni.<br><br>

					¡No te pierdas la oportunidad de vivir la magia del Salar de Uyuni en este tour de 3 días! Contáctanos ahora para reservar tu lugar en esta experiencia única en uno de los paisajes más impresionantes de Bolivia.
				</p>
				<button class="btn btn-rv-uy">Reservar</button>
			</div>
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
						<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
					</ul>

				<!-- Menu -->
				

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