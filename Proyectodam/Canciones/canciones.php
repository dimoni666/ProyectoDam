<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	
	<head>
		<link rel="stylesheet" type="text/css" href="inicio.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sube aqui tu musica!</title>
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
		<h2><?php $idioma->canciones->titulo ?></h2>
        <form enctype="multipart/form-data" action="../Comun/uploader.php" method="post">
<input type="hidden" name="temas" value="true" />
	<p><?php $idioma->comundes->titulo ?></p>&nbsp; &nbsp;<input type="text" name="titulo" id="titulo" size="30" /><br />
	<p><?php $idioma->comundes->año ?></p> &nbsp; &nbsp; &nbsp; <input type="text" name="ano" id="ano" size="30" /><br />
	<p><?php $idioma->comundes->artista ?></p>  &nbsp;<input type="text" name="artista" id="artista" size="30" /><br />
	<p><?php $idioma->comundes->ficheroup ?> </p> <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
	</div>
	</body>
</html>