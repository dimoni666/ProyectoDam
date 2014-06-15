<?php 

$error = false;
$file_type = $_FILES['uploadedfile']['type'];
$file_size = $_FILES['uploadedfile']['size'];
$data = mysql_real_escape_string(file_get_contents($_FILES['uploadedfile']['tmp_name'], 'rb'));
 	$elUsr = "jaume";
    $elPw  = "j1a5um2e";
    $elServer ="localhost";
    $laBd = "base1";

if((isset($_POST['maquetas'])) && (preg_match("/.*rar/",$file_type) || preg_match("/.*zip/",$file_type))){

	$titulo = $_POST['titulo'];
	$artistas = $_POST['artista'];
	$ano = $_POST['ano'];
	$ciudad = $_POST['cuidad'];
	$sql = "INSERT INTO maquetas (titulo, artistas, ano, ciudad, tamano, tipo, fichero) VALUES('$titulo','$artistas',$ano,'$productor','$ciudad','$file_size','$file_type','$data');";

}elseif((isset($_POST['graffitis'])) && (preg_match("/.*jpeg/",$file_type) || preg_match("/.*png/",$file_type) || preg_match("/.*gif/",$file_type))){

	$titulo = $_POST['titulo'];
	$artistas = $_POST['artista'];
	$ano = $_POST['ano'];
	$ciudad = $_POST['cuidad'];
	$estilo = $_POST['estilo'];
	$sql = "INSERT INTO graffitis (titulo, artistas, ano, ciudad, estilo, tamano, tipo, graff) VALUES('$titulo','$artistas',$ano,'$ciudad','$estilo','$file_size','$file_type','$data');";

}elseif((isset($_POST['temas'])) && (preg_match("/.*mp3/",$file_type) || preg_match("/.*mpeg/",$file_type))){

	$titulo = $_POST['titulo'];
	$ano = $_POST['ano'];
	$artista = $_POST['artista'];
	$sql = "INSERT INTO temas (titulo, ano, artista, tamano, tipo, tema) VALUES('$titulo',$ano,'$artista','$file_size','$file_type','$data')";
}else{
	$error = true;
}
if (!$error){
	$conexio = mysql_connect($elServer, $elUsr, $elPw) or die (mysql_error());
	mysql_select_db($laBd, $conexio ) or die (mysql_error());
	mysql_query($sql) or die(mysql_error());
	if(mysql_query($sql)){
		$mensaje = "El fichero ha sido subido satisfactoriamente";
	}else{
		$mensaje = "No se ha podido subir el fichero";
	}
}else{
	$mensaje = "Formato no aceptado ";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Resultado de la subida</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Registro/estilos.css" type="text/css">
<script>
function goBack() {
	window.history.back()
}
</script>
</head>
<body>
<br />
<table align="center" width="200px">
<tr>
<td colspan="2" align="center"><h3>Resultado de la operaci&oacute;n</h3></td>
</tr>
<tr>
<td><?php echo $mensaje; ?></td>
</tr>
<tr>
<td><button onclick="goBack()">Volver</button></td>
</tr>
</table>
</body>
