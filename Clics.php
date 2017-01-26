<div id="clics">
<html>

	<head>
		 <script src="js/Cclics.js"></script>
   		<script src="js/jquery-1.7.1.min.js"></script>
    	<script src="js/jquery.timer.js"></script>
    	<script src="js/timer.js"></script>
	</head>





	<body oncopy="return false"  oncontextmenu="return false">

	<?php

	include('conexion.php');

	$link = conectar();

	$result2 = mysqli_query($link, "SELECT * FROM imagenes");

	mysqli_close();

	# Conectamos con MySQL
	include_once('ruta.php');

	$objeto = new ruta();


	$numero = mysqli_num_rows($result2); // obtenemos el número de filas (cantidad de ids), pensando que van en orden
	$ale = rand(1,$numero);


	$imagenes = $objeto->seleccionar_images($ale);
	foreach($imagenes as  $imagen){
		$variablephp= $imagen['ruta'];
	}

	//echo $variablephp;
	mysqli_close();

	?>


<div >
<input type="button" id="presegundo"  onClick="muestrasegundo();campolleno1('<?php echo $variablephp ?>');" value="Iniciar" />
</div>

<fieldset id="segundo" style="display:none;">

<span style="display: none" id="stopwatch">00:00:00</span>

<div name="form2"   id="FormularioOCR"  >

<!-- border:"1px solid #cc6699;" onSubmit="verificar();  action="#"" method="POST"-->


  <p>
    <div class="container" id="oculto" style="width:250px; height:250px; " >
		<img class="centro" id="sorry" src="imagenes/sorry.jpg" style="display:none;" />
		<canvas class="centro" id="myCanvas" width="250" height="250" onclick="onCanvasClick(event);" ></canvas>				
	</div>

  <div id="oculto3"  style=" display:none; width:250px; height:250px; border: 0px solid #cc6699;" >
      <img  src="imagenes/true.png" width="225px" height="225px" style="display:inherit;" />
	</div>
  </p>






</div>

</fieldset>


	<p>
		<input type="submit" id="enviar2"  style="display: none"/>
	</p>



	</body>


</html>
</div>