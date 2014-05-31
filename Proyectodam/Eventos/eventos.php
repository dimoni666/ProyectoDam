<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="../Comun/js/menu.js"></script>
		<link rel="stylesheet" type="text/css" href="../Comun/css/estiloweb.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contacta con nosotros</title>
		<meta name="author" content="jaume" />
		<!-- Date: 2013-05-30 -->
	</head>
	<body>
	<script src="../Comun/js/SetGetParameter.js"></script>
	<?php 
	if (!isset($_GET['leng']) && !isset($_COOKIE['leng'])){
		include '../Comun/idiomas/SpaXML.php';
	}else if(isset($_GET['leng'])){
		include '../Comun/idiomas/'. $_GET['leng'] .'.php';
		$_COOKIE['leng'] = $_GET['leng'];
	}else if(isset($_COOKIE['leng'])){
		include '../Comun/idiomas/'.$_COOKIE['leng'].'.php';
	}
	$idioma = new SimpleXMLElement($xmlstr);
	?>
		<div id="CatXML">
	<a href="#" onClick="SetGetParameter('leng','CatXML');"><img src="../Comun/Imagenes/boton_bandera_catalana.png" width= "25px"
	height= "25px" id="fotoCat"/></a>
		</div>
		<div id="SpaXML">
	<a href="#" onClick="SetGetParameter('leng','SpaXML');"><img src="../Comun/Imagenes/boton_bandera_espanola.png" width="25px"
	height="25px" id="fotoSP" /></a>
	</div>
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
    	<?php echo $idioma->Eventos->texto ?>
			<h1><?php echo $idioma->contenido->Eventos->titulo ?></h1>
	<img src="17-06-2013.png" alt="Atrevete" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px;"/>
    		   <?php echo $idioma->contenido->Eventos->evento1 ?>
	  <img src="13-06-2013.png" alt="Concierto" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px; top:100px;"/>
      	<?php echo $idioma->contenido->Eventos->evento2 ?>
     	<img src="21-06-2013.png" alt="Concierto" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px;"/>
     	<?php echo $idioma->contenido->Eventos->evento3 ?>
       <img src="15-07-2013.png" alt="Concierto" width="144" height="105" style="float:left;margin: 5px 5px 5px 5px; "/>
       <?php echo $idioma->contenido->Eventos->evento4 ?>
	</div>
	    <div id="sesion">
    <?php
    	session_start();
    	if (isset($_SESSION["autenticado"]) and ($_SESSION["autenticado"] == "SI")) {
    		echo $idioma->contenido->logged->saludo.", " . $_SESSION["nombre"] . "<br/>";
    		echo "<a href='Registro/cerrarSesion.php'>".$idioma->contenido->logged->cerrar."</a>";
    		echo "<form><input type='button' value='Descarga' onClick='window.location.href='../Comun/Descargas/proyecto.jar''></form>";
    	} else {
			echo "<a href='../Registro/index.php'>".$idioma->contenido->logged->iniciar."</a>";
			
    	}
    	
?>
    			
        </div>
	</body>
</html>