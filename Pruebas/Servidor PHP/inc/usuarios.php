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
      <label for="name">Nombre:</label> 
      <input type="text" id="name" name="Nombre" value="" placeholder="Nombre" required="required" autofocus="autofocus" /> 
      
      <label>Apellido:</label> 
      <input type="text" id="apellido" name="Apellidos" value="" placeholder="Apellidos" required="required" autofocus="autofocus" /> 

      <label for="genero">Genero: </label> 
      <select id="genero" name="genero">   
         <option value="0">Mujer</option>
         <option value="1">Hombre</option> 
      </select> 

      <label for="email">Email:</label> 
      <input type="email" id="email" name="email" value="" placeholder="your@email.com" required="required" /> 
         
      <label for="password">Password: </label>       
      <input type="password" id="pass" name="pass" value="" placeholder="Pasword" required="required" autofocus="autofocus" /> 
           
      <input type="submit" value="enviar" id="submit" />
</form> 

<?php include "../pie.inc"; ?>