<?php error_reporting(0);
/*function conectar(){
	$usuario='u132001951_db'; 
	$contrasena='123';
	$servidor='mysql.hostinger.mx';
	
	$MiBD= "imagenes";
	if (!($link=mysql_connect($servidor,$usuario,$contrasena) or die('no esta lista la conexion')))   {       exit();     }
    if (!mysql_select_db($MiBD,$link))   { 
      exit();     }
	  mysql_query('SET NAMES UTF8');
   return $link;
}*/
?>

<?php 

// Parametros a configurar para la conexion de la base de datos
include_once ("dbconfig.php");

$hotsdb = DB_SERVER;    // sera el valor de nuestra BD
$basededatos = DB_NAME;    // sera el valor de nuestra BD

$usuariodb = DB_USER;    // sera el valor de nuestra BD
$clavedb = DB_PASS;    // sera el valor de nuestra BD

$tabla = "resultado";    // sera el valor de una tabla 
$tabla_db2 = "otratabla";    // sera el valor de otra tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexion denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 