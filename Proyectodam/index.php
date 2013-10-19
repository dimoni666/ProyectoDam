<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	
	<head>
		<link rel="stylesheet" type="text/css" href="inicio.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Bienvenido al Antro del Rap</title>
		<meta name="author" content="jaume" />
		<!-- Date: 2013-05-30 -->
	</head>
	<body>
		<div id="letras">
			<a href="../index.php"> <img src="../Comun/Imagenes/logo.png" id=foto2 /></a>
		</div>
		<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Canciones/canciones.html">Canciones</a></li>
			<li><a href="Maquetas/maquetas.html">Maquetas</a></li>
			<li><a href="Info/info.html">Contacta</a></li>
			<li><a href="Graffiti/fotos.html">Graffitis</a></li>
			<li><a href="Eventos/eventos.html">Eventos</a></li>
            <li><a href="../mediaplayer/reproductor.html" target="_blank">Reproductor</a></li>
		</ul>
		</div>
	<div id="contenido">
    <h1> La historia del Rap </h1>
		<p>El rap surge como un estilo musical en los barrios negros y latinos de Nueva York en la década de 1970, como la expresión desde el sonido y las melodías de la cultura hip hop, que agrupa corrientes estéticas como el graffiti, el breakdance o el scratch. Desde allí se lanzó al mundo, tomando diferentes peculiaridades regionales en cada país o continente.
Musicalmente hablando, mientras el hip hop propiamente dicho nace desde la música religiosa de origen negro y se funde en gran manera con el funk y el disco, el rap rompe con esta ligazón y se acerca más al breakdance, tomando al mismo tiempo un lenguaje propio.
En las primeras presentaciones de grupos de rap, el estilo se sustentaba en las musicas de un Disc Jockey que, utilizando algunas canciones y empleando cortes y mezclas, lograba una composición que funcionaba como fondo sonoro para que pudiese rapear un MC o varios intérpretes al mismo tiempo.
Ese lenguaje y esa cadencia particular se sustentan en una actitud contestataria, de una clara tendencia anti-sistema. Pero como toda expresión artística, resulta muy complejo detenerla o congelarla. Es así que los raperos de los años 70 dieron lugar a una expresión más metafórica y compleja desde la lírica en los años 80, que a la vez se manifestó en los ritmos y bases de musica empleadas.</p>
	</div>
    <div id="sesion">
    <?php
    	session_start();
    	if (isset($_SESSION["autenticado"]) and ($_SESSION["autenticado"] == "SI")) {
    		echo "Hola, " . $_SESSION["nombre"] . "<br/>";
    		echo '<a href="Registro/cerrarSesion.php">Cerrar sesi&oacute;n</a>';
    	} else {
			echo '<p><a href="Registro/index.php"> Iniciar sesion </a></p>';
    	}
    	
?>
    			
			</form>
        </div>
	</body>
</html>

