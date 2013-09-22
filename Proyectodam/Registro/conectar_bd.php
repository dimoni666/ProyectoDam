<?php

 
$conexio;
function conectar_bd()
{
    global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "u164867912_kase";
    $elPw  = "ceroca00";
    $elServer ="mysql.hostinger.es";
    $laBd = "u164867912_adr";
     
    //Conectar
    $conexio = mysql_connect($elServer, $elUsr,$elPw) or die (mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error());
}   
?>