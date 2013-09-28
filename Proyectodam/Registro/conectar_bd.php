<?php

 
$conexio;
function conectar_bd()
{
    global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "jaume";
    $elPw  = "j1a5um2e";
    $elServer ="localhost";
    $laBd = "base1";
     
    //Conectar
    $conexio = mysql_connect($elServer, $elUsr,$elPw) or die (mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error());
}   
?>