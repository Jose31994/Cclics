<?php error_reporting(0);
function conectar(){


	include_once ("dbconfig.php");
	//$usuario='root';
	//$contrasena='123';
	//$servidor='localhost';

	$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	/* comprobar la conexión */
	if (mysqli_connect_errno()) {
		printf("Falló la conexión: %s\n", mysqli_connect_error());
		exit();
	}

//	//$MiBD= "imagenes";
//	if (!($link=mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die('no esta lista la conexion')))   {
//	//print "primer if";
//            exit();     }
//    if (!mysqli_select_db(DB_NAME,$link))   {
      
//print "segundo if";
//exit();

 // }


	        //mysql_query('SET NAMES UTF8');

   return $link;
}
?>
