<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/estilos.css" type="text/css" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide"
		  });
		});
	</script>
	<title>Menu Principal</title>
	</head>

	<body>
		<div id="head">
			<div class="flexslider">
  					<ul class="slides">
					    <li>
					      <img src="img/imagen1.jpg" />
					    </li>
					    <li>
					      <img src="img/imagen2.jpg" />
					    </li>
					    <li>
					      <img src="img/imagen3.jpg" />
					    </li>
					    <li>
					      <img src="img/imagen4.jpg" />
					    </li>
					    <li>
					      <img src="img/imagen5.jpg" />
					    </li>
					    <li>
					      <img src="img/imagen6.jpg" />
					    </li>
					 </ul>
				</div>
		</div>
		<div id="menu">
				<nav>
					<ul>
					<li> <a class="menu" href="#">Usuarios</a> </li>
					<li> <a class="menu" href="#">Eventos</a> </li>
					<li> <a class="menu" href="#">Categoria de Eventos</a> </li>
					<li> <a class="menu" href="#">Destinos</a> </li>
					<li> <a class="menu" href="#">Clientes</a> </li>
					<li> <a class="menu" href="#">Calendario</a> </li>
					</ul>
					<div class="clear"> </div>
				</nav>
		</div>
		<div id ="titulo">
			<center>
				<h1>Sistema Central</h1>
				<h3 class="Subtitulo"><em>Ayudando en tu desarrollo Profesional</em></h3>
			</center>
		</div>
		<div id="MenuPrincipal">
			<h2 class="letraContenidoTitulo">Apps Móviles</h2>
			<input class="letraContenidoTitulo" id="buscar"type="text" placeholder="Buscar">
			<div id="plataformaMovil">
				<img src="">
				<h4 class="letraContenido">Android</h4>
				<img src="">
				<h4 class="letraContenido">iOS</h4>
				<img src="">
				<h4 class="letraContenido"> Windows Phone</h4>
			</div>
			<div id="movilRecinete">
				<img src="">
				<h4 class="letraContenido">Calculadora</h4>
				<img src="">
				<h4 class="letraContenido">Editor de Texto</h4>
				<img src="">
				<h4 class="letraContenido">Geolocalización</h4>
				<img src="">
				<h4 class="letraContenido">Alarma</h4>
			</div>
		</div>
		<footer>
			<h6 class="footer">Create By Lenguajes de Programacion</h6>
		</footer>
	</body>
</html>
