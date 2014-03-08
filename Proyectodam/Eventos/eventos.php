<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="inicio.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contacta con nosotros</title>
		<meta name="author" content="jaume" />
		<!-- Date: 2013-05-30 -->
	</head>
	<body>
	<?php 
	include '../Comun/idiomas/SpaXML.php';
	
	$idioma = new SimpleXMLElement($xmlstr);
	
	?>
		<div id="letras">
			<a href="../index.php"> <img src="../Comun/Imagenes/logo.png" id=foto2 /></a>
		</div>
			<div id="menu">
		<ul>
			<li><a href="../index.php"><?php  echo $idioma->Menu->uno;?></a></li>
			<li><a href="../Canciones/canciones.php"><?php  echo $idioma->Menu->dos;?></a></li>
			<li><a href="../Maquetas/maquetas.php"><?php  echo $idioma->Menu->tres;?></a></li>
			<li><a href="../Info/info.php"><?php  echo $idioma->Menu->cuatro;?></a></li>
			<li><a href="../Graffiti/fotos.php"><?php  echo $idioma->Menu->cinco;?></a></li>
			<li><a href="../Eventos/eventos.php"><?php  echo $idioma->Menu->seis;?></a></li>
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
    	<?php $idioma->Eventos->texto ?>
			<h1><?php $idioma->Eventos->titulo ?>S</h1>
	<img src="17-06-2013.png" alt="Atrevete" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px;"/>
    		   <?php $idioma->Eventos->evento1?>
	  <img src="13-06-2013.png" alt="Concierto" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px; top:100px;"/>
      	<?php $idioma->Eventos->evento2?>
     	<img src="21-06-2013.png" alt="Concierto" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px;"/>
     	<?php $idioma->Eventos->evento3?>
       <img src="15-07-2013.png" alt="Concierto" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px; "/>
       <?php $idioma->Eventos->evento4?>
	</div>
	</body>
</html>