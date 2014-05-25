<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

	<head>
		<link rel="stylesheet" type="text/css" href="../Comun/css/estiloweb.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Contacta con nosotros</title>
		<meta name="author" content="jaume" />
		<!-- Date: 2013-05-30 -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="../Comun/js/menu.js"></script>
	</head>
	<body>
	<script src="../Comun/js/SetGetParameter.js"></script>
	<?php 
	include '../Comun/idiomas/SpaXML.php';
	
	$idioma = new SimpleXMLElement($xmlstr);
	
	?>
		<div id="letras">
			<a href="../index.php"> <img src="../Comun/Imagenes/logo.png" id=foto2 /></a>
		</div>
			<div id="container">
		<ul>
			<li><a class="nodropdown" href="../index.php"><?php  echo $idioma->Menu->uno;?></a></li>
			<li><a class="nodropdown" href="../Canciones/canciones.php"><?php  echo $idioma->Menu->dos;?></a></li>
			<li><a class="nodropdown" href="../Maquetas/maquetas.php"><?php  echo $idioma->Menu->tres;?></a></li>
			<li><a class="nodropdown" href="../Info/info.php"><?php  echo $idioma->Menu->cuatro;?></a></li>
			<li><a class="nodropdown" href="../Graffiti/fotos.php"><?php  echo $idioma->Menu->cinco;?></a></li>
			<li><a class="nodropdown" href="../Eventos/eventos.php"><?php  echo $idioma->Menu->seis;?></a></li>
			<li><a class="dropdown" href="#" ><?php  echo $idioma->Menu->siete;?></a></li>
			<li class="sublinks">
                                <a href="../Descargas/descargas.php?sd=M"><?php  echo $idioma->submenu->uno;?></a>
                                <a href="../Descargas/descargas.php?sd=C"><?php  echo $idioma->submenu->dos;?></a>
                                <a href="../Descargas/descargas.php?sd=G"><?php  echo $idioma->submenu->tres;?></a>
 			</li>
           <li><a class="nodropdown" href="../mediaplayer/reproductor.html" target="_blank"><?php  echo $idioma->Menu->ocho;?></a></li>
 		</ul>
 		</div>
	<div id="contenido">
    	<h1> <?php echo $idioma->contenido->contacta->titulocont ?></h1>
		<p> <?php echo $idioma->contenido->contacta->textocont ?></p>
	</div>
	</body>
	    <div id="sesion">
    <?php
    	session_start();
    	if (isset($_SESSION["autenticado"]) and ($_SESSION["autenticado"] == "SI")) {
    		echo $idioma->contenido->logged->saludo.", " . $_SESSION["nombre"] . "<br/>";
    		echo "<a href='Registro/cerrarSesion.php'>".$idioma->contenido->logged->cerrar."</a>";
    	} else {
			echo "<a href='Registro/index.php'>".$idioma->contenido->logged->iniciar."</a>";
			echo "<form><input type='button' value='Descarga' onClick='window.location.href='../Comun/Descargas/proyecto.jar''></form>";
    	}
    	
?>
    			
        </div>
</html>