	
	<?php 
	if (!isset($_GET['leng']) && !isset($_COOKIE['leng'])){
		include '../Comun/idiomas/SpaXML.php';
	}else if(isset($_GET['leng'])){
		include '../Comun/idiomas/'. $_GET['leng'] .'.php';
		setcookie('leng',$_GET['leng']);
	}else if(isset($_COOKIE['leng'])){
		include '../Comun/idiomas/'.$_COOKIE['leng'].'.php';
	}
	$idioma = new SimpleXMLElement($xmlstr);
	?>
<?php


 	$elUsr = "jaume";
    $elPw  = "j1a5um2e";
    $elServer ="localhost";
    $laBd = "base1";
	$conexio = mysql_connect($elServer, $elUsr, $elPw) or die (mysql_error());
	mysql_select_db($laBd, $conexio ) or die (mysql_error());
	
	if (isset($_GET["id"])){
		$id=$_GET["id"];
		switch ($_GET["sd"]){
			case "M":
			$sql ="select titulo, tamano, tipo, fichero  from maquetas where ID = '$id'";
			$campo = "fichero";
			break;
			case "C": 
			$sql ="select titulo, tamano, tipo, tema from temas where ID = '$id'";
			$campo = "tema";
			break;
			case "G": 
			$sql ="select titulo, tamano, tipo, graff from graffitis where ID = '$id'";
			$campo = "graff";
			break;
		}
		$resultado = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($resultado, MYSQL_ASSOC);
		header("Content-length: ".$row['tamano']);
		header("Content-type: ".$row['tipo']);
		$extensiones = array(
			"image/jpeg" => "jpg",
			"image/png" => "png",
			"image/gif" => "gif",
			"audio/mpeg" => "mp3",
			"audio/mp3" => "mp3",
			"application/rar" => "rar",
			);
		$extension = $extensiones[$row['tipo']];
 		header("Content-Disposition: attachment;filename =".str_replace(" ","_",$row['titulo']).".".$extension);
 		echo $row[$campo];
	}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<script src="../Comun/js/SetGetParameter.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="../Comun/js/menu.js"></script>
		<link rel="stylesheet" type="text/css" href="../Comun/css/estiloweb.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Descarga y descubre nuevas emociones</title>
		<meta name="author" content="jaume" />
		<!-- Date: 2013-05-30 -->
	</head>
 	<body>
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
 		    <div id="sesion">
    <?php
    session_start();
	if (isset($_SESSION["autenticado"]) and ($_SESSION["autenticado"] == "SI")) {
    		echo $idioma->contenido->logged->saludo.", " . $_SESSION["nombre"] . "<br/>";
    		echo "<a href='../Registro/cerrarSesion.php'>".$idioma->contenido->logged->cerrar."</a>";
    		echo "<form><input type=\"button\" value=\"Descarga\" onClick=\"window.location.href='../Descargas/setup.sfx.exe'\"></form>";
    	} else {
			echo "<a href='../Registro/index.php'>".$idioma->contenido->logged->iniciar."</a>";
			
    	}
    	
?>
    			
        </div>
<div id="contenido">
<?php
		switch ($_GET["sd"]){
			case "M":
			$sql="SELECT ID,titulo,ano,artistas,ciudad FROM maquetas ORDER BY artistas";
			break;
			case "C": 
			$sql="SELECT ID,titulo,ano,artista FROM temas ORDER BY artista";
			break;
			case "G": 
			$sql="SELECT ID,titulo,ano,artistas,ciudad FROM graffitis ORDER BY artistas";
			break;
		}
		$resultado = mysql_query($sql) or die(mysql_error());
		$i = 0;
		echo "<div class='table'>";
	
		while ($row = mysql_fetch_array($resultado, MYSQL_NUM)) {
			echo "<div class='row'>";
    		echo "<span class='cell' style='background-color: #B8B8B8;'><a href=\"descargas.php?sd=".$_GET["sd"]."&id=".$row[0]."\">".$row[1]."</a></span>";
    		for ($x=2;$x<count($row);$x++){
    			if ($x % 2 == 0) {
    				 $bgcolor="#D8D8D8";
    				 } else {
    					 $bgcolor="#B8B8B8";
    					 }
    					 echo "<span class='cell' style='background-color: $bgcolor;'>".$row[$x]."</span>";
    		}
    		echo "</div>";
		}
		echo"</div>";
	}
?>
</div>
 </body>
</html>
