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
	<?php 
	include 'Comun/idiomas/SpaXML.php';
	
	$idioma = new SimpleXMLElement($xmlstr);
	
	?>
	<div id="idiomas">
	<img src="../Comun/Imagenes/boton_bandera_catalana.png" id=fotoCat />
	<img src="../Comun/Imagenes/boton_bandera_espanola.png" id=fotoSP />
	</div>
		<div id="letras">
			<a href="../index.php"> <img src="../Comun/Imagenes/logo.png" id=foto2 /></a>
		</div>
		<div id="menu">
		<ul>
			<li><a href="../index.php"><?php  echo $idioma->Menu->uno;?></a></li>
			<li><a href="../Canciones/canciones.html"><?php  echo $idioma->Menu->dos;?></a></li>
			<li><a href="../Maquetas/maquetas.html"><?php  echo $idioma->Menu->tres;?></a></li>
			<li><a href="../Info/info.html"><?php  echo $idioma->Menu->cuatro;?></a></li>
			<li><a href="../Graffiti/fotos.html"><?php  echo $idioma->Menu->cinco;?></a></li>
			<li><a href="../Eventos/eventos.html"><?php  echo $idioma->Menu->seis;?></a></li>
			 <li><?php  echo $idioma->Menu->siete;?>
			 <ul id="submenu">
                                <li id="submenu"><a href="../Descargas/descargas.php?sd=M"><?php  echo $idioma->submenu->uno;?></a></li>
                                <li id="submenu"><a href="../Descargas/descargas.php?sd=C"><?php  echo $idioma->submenu->dos;?></a></li>
                                <li id="submenu"><a href="../Descargas/descargas.php?sd=G"><?php  echo $idioma->submenu->tres;?></a></li>
                        </ul>
			</li>
           <li><a href="../mediaplayer/reproductor.html" target="_blank"><?php  echo $idioma->Menu->ocho;?></a></li>
		</ul>
		</div>
		<div id="contenido">
		<?php
			if (isset($_GET["resultado"]) and ($_GET["resultado"] == "exito")) {
		?>
				<h1>Fichero subido con éxito!</h1>
		<?php	
			}elseif (isset($_GET["resultado"]) and ($_GET["resultado"] == "fallo")){
		?>
			<h1>No se ha podido subir el archivo</h1>
			<p>Las extensiones que aceptamos son: .rar,.jpg,.png,.gif y .mp3</p>
		<?php
			}else{
		?>
		<h1> <?php  echo $idioma->contenido->inicio->titinicio;?> </h1>
		<p><?php  echo $idioma->contenido->inicio->textoini;?></p>
		<?php
			}
		?>		
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

