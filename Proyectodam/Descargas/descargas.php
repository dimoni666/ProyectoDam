<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="inicio.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Descarga y descubre nuevas emociones</title>
		<meta name="author" content="jaume" />
		<!-- Date: 2013-05-30 -->
	</head>
 	<body>
		<div id="letras">
			<a href="../index.php"> <img src="../Comun/Imagenes/logo.png" id=foto2 /></a>
		</div>
		<div id="menu">
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li><a href="../Canciones/canciones.html">Canciones</a></li>
			<li><a href="../Maquetas/maquetas.html">Maquetas</a></li>
			<li><a href="../Info/info.html">Contacta</a></li>
			<li><a href="../Graffiti/fotos.html">Graffitis</a></li>
			<li><a href="../Eventos/eventos.html">Eventos</a></li>
			<li><a href="../Descargas/descargas.php">Descargas</a></li>
           <li><a href="../mediaplayer/reproductor.html" target="_blank">Reproductor</a></li>
		</ul>
		</div>
<?php
$sql="SELECT titulo FROM temas";

 	$elUsr = "jaume";
    $elPw  = "j1a5um2e";
    $elServer ="localhost";
    $laBd = "base1";
	$conexio = mysql_connect($elServer, $elUsr, $elPw) or die (mysql_error());
	mysql_select_db($laBd, $conexio ) or die (mysql_error());
	$resultado = mysql_query($sql) or die(mysql_error());

	while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
    	echo "Titulo:".$row["titulo"]."<br>";
	}

?>
 </body>
</html>