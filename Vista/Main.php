<!doctype html>
<html lang="en">
  <head>
		<!--Typpy JS para los poppers-->
		<script src="https://unpkg.com/@popperjs/core@2"></script>
		<script src="https://unpkg.com/tippy.js@6"></script>
		<!--Animaciones CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<!--JavaScript-->
		<script src="./Vista/js/scripts.js" defer></script>
		<!--font awesome-->
		<script src="https://kit.fontawesome.com/29735a6008.js" crossorigin="anonymous"></script>
		<!--favicon-->
		<link rel="apple-touch-icon" sizes="180x180" href="./Vista/assets/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./Vista/assets/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./Vista/assets/favicon/favicon-16x16.png">
		<link rel="manifest" href="./Vista/assets/favicon/site.webmanifest">
		<!--font-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet"> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="./Vista/estilos.css">
    <title>Feria Virtual</title>
  </head>
  	<body class="mh-100-vh" style="padding-bottom: 5em !important">
				<header class="user-header d-flex flex-wrap align-items-center justify-content-between general-shadow">
					<img width="110" height="50" src="https://admision.covao.org/Grafica/image/logo.png" class="img-fluid" >
				</header>	
				<main class="main-container py-4">
						<div class="texto-container px-4" style="font-size: 1.2rem;">
							<h2 class="txtregistro fs-3 mt-2 mb-3">Bienvenido a la Feria Virtual COVAO 2022</h2>
							<p>Aquí podrá conocer más sobre todas las especialidades impartidas, ubicadas en el mapa del colegio según su ubicación real mediante los puntos blancos.</p>
							<p>En caso de que quiera recibir más información puede registrarse en el botón de abajo.</p>	
							<a href="index.php?controlador=Index&accion=Registro">
								<button type="button" class="btn btn-outline-primary me-2">Registrarme</button>
							</a>
						</div>
						<div class="map-container">
								<img class="map-container__image" src="./Vista/assets/images/mapa.png" alt="Mapa COVAO">

								<div class="point point-info animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-accounting animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-conta animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-presicion animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-mantenimiento animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-electro animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-diseno animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-automotriz animate__animated animate__heartBeat animate__infinite"></div>
								<div class="point point-secretariado animate__animated animate__heartBeat animate__infinite"></div>
						</div>
				</main>
				<footer class="position-fixed bottom-0 w-100 py-3 px-5 general-shadow" style="background-color: #fff;">
						<div class="footer-content text-muted d-flex justify-content-between">
							<ul class="nav gap-3" style="font-size: 1.2rem;">
								 <li class="">
										<a class="text-muted" href="https://www.instagram.com/covao.diurno/?hl=es-la">
											<i class="fa-brands fa-instagram"></i>
										</a>
								 </li>
								 <li class="">
										<a class="text-muted" href="https://www.youtube.com/channel/UCLfrfTSgNqIrkKvYmNtwODg">
											<i class="fa-brands fa-youtube"></i>
										</a>
								</li>
								 <li class="">
										<a class="text-muted" href="https://www.facebook.com/covaodiurno">
											<i class="fa-brands fa-facebook-square"></i>
										</a>
								</li>
								 <li class="">
										<a class="text-muted" href="https://covao.org/">
											<i class="fa-solid fa-globe"></i>
										</a>
								</li>
							</ul>
							<span>© 2022 Feria Virtual COVAO</span>
						</div>
				</footer>
  </body>
</html>
	
