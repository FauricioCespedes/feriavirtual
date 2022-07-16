<?php
session_start();
$estado = $_SESSION['Estado'];

if ($estado != 1) {
	echo 'No eres bienvenido';
	header("Location: index.php?controlador=Index&accion=Login");
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Feria Virtual</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.css">
	<link rel="stylesheet" href="./Vista/estilos.css">
</head>

<body class="mh-100-vh" style="padding-bottom: 5em !important">
    <header class="user-header admin-header d-flex flex-wrap py-1 align-items-center justify-content-between general-shadow">
        <img width="110" height="50" src="https://admision.covao.org/Grafica/image/logo.png" class="img-fluid" >
    
        <ul class="nav mx-auto">
            <li><a href="./?controlador=Registro&accion=VistaRegistro" class="nav-link px-2 link-secondary">Visitantes</a></li>
            <li><a href="./?controlador=Mensajes&accion=VistaMensajeria" class="nav-link px-2 link-secondary">Mensajes</a></li>
            <li><a href="./?controlador=Administradores&accion=VistaAdmin2" class="nav-link px-2 link-secondary">Administradores</a></li>
        </ul>
    
				<div class="dropdown d-none">
					<i class="fa-solid fa-ellipsis-vertical ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					</i>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href="./?controlador=Registro&accion=VistaRegistro" class="nav-link px-2 link-secondary">Visitantes</a></li>
            <li><a href="./?controlador=Mensajes&accion=VistaMensajeria" class="nav-link px-2 link-secondary">Mensajes</a></li>
            <li><a href="./?controlador=Administradores&accion=VistaAdmin2" class="nav-link px-2 link-secondary">Administradores</a></li>
					</ul>
				</div>

        <div class="text-end">
            <a href="index.php?controlador=Index&accion=Salir">
                <button type="button" class="btn btn-outline-primary">Salir</button>
            </a>
        </div>

    </header>	
	<main class="">
		<div class="texto-container w-50 mx-auto mt-3 p-3  rounded general-shadow">
			<h1 class="fs-4 fw-bold">Mensajería por correo</h1>
			<p class="text-secondary" style="font-size: .85rem;">El mensaje que envíe llegará al correo de todas las personas registradas.</p>
			<form action="./?controlador=Mensajes&accion=EnviarMensaje" method="post">
				<label>Titulo del Mensaje</label>
				<input name="title" class="form-control mb-3 mt-1" type="text">
				<label>Cuerpo del mensaje</label>
				<textarea name="massage" class="form-control mb-3 mt-1" style="resize: none;" name="mensaje" cols="30" rows="5"></textarea>
				<button class="btn btn-primary">Enviar</button>
			</form>
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
	<script defer src="https://kit.fontawesome.com/29735a6008.js" crossorigin="anonymous"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script defer src="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.js"></script>


	<script defer>
		//const celularBreakPoint = matchMedia('(max-width: 580px)');
		//const changeSize = mql => {
		//mql.matches 
		//? document.getElementById('table').setAttribute("data-card-view" , "false")
		//: document.getElementById('table').setAttribute("data-card-view" , "true")
		//}

		//celularBreakPoint.addListener(changeSize);
		//changeSize(celularBreakPoint);

		//if(window.matchMedia("(min-width: 400px)").matches) console.log('viva costa ricaa');
		//else if (window.matchMedia("(max-width: 400px)").matches) console.log('ok');
		//

		//const mediaQueryCelu = window.matchMedia('(max-width: 400px)');
		//function atento(mql){
		//console.log('ola');
		//}
	</script>
</body>

</html>
