<?php 

// $tmpName = $_FILES['uploadedfile']['tmp_name'];
$data = mysql_real_escape_string(file_get_contents($_FILES['uploadedfile']['tmp_name'], 'rb'));
 $elUsr = "u164867912_kase";
    $elPw  = "ceroca00";
    $elServer ="mysql.hostinger.es";
    $laBd = "u164867912_adr";

if((isset($_POST['maquetas'])) && preg_match("/.*rar/",$_FILES['uploadedfile']['type'])){

	$titulo = $_POST['titulo'];
	$artistas = $_POST['artistas'];
	$ano = $_POST['ano'];
	$productor = $_POST['productor'];
	$ciudad = $_POST['cuidad'];
	$sql = "INSERT INTO maquetas (titulo, artistas, ano, productor, ciudad, fichero) VALUES('$titulo','$artistas',$ano,'$productor','$ciudad','$data');";

}elseif((isset($_POST['graffitis'])) && (preg_match("/.*jpeg/",$_FILES['uploadedfile']['type']) || preg_match("/.*png/",$_FILES['uploadedfile']['type']) || preg_match("/.*gif/",$_FILES['uploadedfile']['type']))){

	$titulo = $_POST['titulo'];
	$artistas = $_POST['artistas'];
	$ano = $_POST['ano'];
	$ciudad = $_POST['cuidad'];
	$estilo = $_POST['estilo'];
	$sql = "INSERT INTO graffitis (titulo, artistas, ano, ciudad, estilo, graff) VALUES('$titulo','$artistas',$ano,'$ciudad','$estilo','$data');";

}elseif((isset($_POST['temas'])) && preg_match("/.*mp3/",$_FILES['uploadedfile']['type'])){

	$titulo = $_POST['titulo'];
	$ano = $_POST['ano'];
	$artista = $_POST['artista'];
	$sql = "INSERT INTO temas (titulo, ano, artista, tema) VALUES('$titulo',$ano,'$artista','$data')";
}else{
	echo "Unknown format\n";
	echo $_FILES['uploadedfile']['type'] . "\n";
}

$conexio = mysql_connect($elServer, $elUsr, $elPw) or die (mysql_error());
mysql_select_db($laBd, $conexio ) or die (mysql_error());
mysql_query($sql) or die(mysql_error());
echo "Fichero guardado en la base de datos correctamente!";

?>
