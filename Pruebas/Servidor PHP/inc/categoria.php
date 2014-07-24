<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="../css/estilos.css" type="text/css" />
   <link rel="stylesheet" href="../css/flexslider.css" type="text/css" />
   <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" src="../js/jquery.flexslider.js"></script>
<script>
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide"
		  });
		});
	</script>
<body>
		<div id="head">
			<div class="flexslider">
  					<ul class="slides">
					    <li>
					      <img src="../img/imagen1.jpg" />
					    </li>
					    <li>
					      <img src="../img/imagen2.jpg" />
					    </li>
					    <li>
					      <img src="../img/imagen3.jpg" />
					    </li>
					    <li>
					      <img src="../img/imagen4.jpg" />
					    </li>
					    <li>
					      <img src="../img/imagen5.jpg" />
					    </li>
					    <li>
					      <img src="../img/imagen6.jpg" />
					    </li>
					 </ul>
				</div>
		</div>
		<div id="menu">
				<nav>
					<ul>
					<li> <a class="menu" href="usuarios.php">Usuarios</a> </li>
					<li> <a class="menu" href="eventos.php">Eventos</a> </li>
					<li> <a class="menu" href="categoria.php">Categoria de Eventos</a> </li>
					<li> <a class="menu" href="destinos.php">Destinos</a> </li>
					<li> <a class="menu" href="clientes.php">Clientes</a> </li>
					<li> <a class="menu" href="calendario.php">Calendario</a> </li>
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

		<div id="seccion">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form method="post" action=""> 
      <label for="tipo">Tipo de Evento:</label> 
      <input type="text" id="TipoEvento" name="TipoEventi" value="" placeholder="Tipo de Evento" required="required" autofocus="autofocus" /> 
      
      <label>Detalles Evento:</label> 
      <input type="text" id="detalles" name="detalles" value="" placeholder="Detalles de Evento" required="required" autofocus="autofocus" /> 

           
      <input type="submit" value="enviar" id="submit" />
</form> 

<?php include "../pie.inc"; ?>