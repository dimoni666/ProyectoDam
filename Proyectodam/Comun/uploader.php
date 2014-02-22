<?php 

// $tmpName = $_FILES['uploadedfile']['tmp_name'];
$file_type = $_FILES['uploadedfile']['type'];
$file_size = $_FILES['uploadedfile']['size'];
$data = mysql_real_escape_string(file_get_contents($_FILES['uploadedfile']['tmp_name'], 'rb'));
 	$elUsr = "jaume";
    $elPw  = "j1a5um2e";
    $elServer ="localhost";
    $laBd = "base1";

if((isset($_POST['maquetas'])) && preg_match("/.*rar/",$file_type)){

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
	echo "Unknown format\n";
	echo $file_type . "\n";
}

$conexio = mysql_connect($elServer, $elUsr, $elPw) or die (mysql_error());
mysql_select_db($laBd, $conexio ) or die (mysql_error());
mysql_query($sql) or die(mysql_error());
echo "Fichero guardado en la base de datos correctamente!";

?>