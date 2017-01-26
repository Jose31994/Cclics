<!--
Author: José Alberto Noh
-->
<!DOCTYPE HTML>
<html>
<head>
<title>CAPTCHA Clics's | Contacto</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<link rel="icon" href="images/favicon.png" type="image/png" />
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
	<!---header- -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<i class="sr-only">Toggle navigation</i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</button>
						<div class="navbar-brand">
							<h1><a href="default.php">CAPTCHA Clic's</a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="default">Inicio<i class="sr-only">(current)</i></a></li>
							<li><a href="about">Acerca de</a></li>
							<li><a href="support">Soporte</a></li>
							
							<li class="active"><a href="contact">Contacto</a></li>
						</ul>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!---header- -->
		<!-- //contact -->
				<div class="content">
					<div class="contact">
						<div class="container">
							<h2>CONTACTO</h2>
							<!--<div class="contact-bottom">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25747236.632689714!2d-115.51770600214958!3d38.02440374907425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c67c6fb8a88d%3A0x1db86518c8d575d3!2sHostGator!5e0!3m2!1sen!2sin!4v1451469130125"  frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>-->
							<br><br><br>
							<div class="col-md-4 contact-left">
								<h4>Sobre el autor:</h4>
								<p> Actualmente:<br><br>
									Pasante de la licenciatura en ciencias de la computación por la facultad de matemáticas de la Universidad Autónoma de Yucatán.<!--<span>26 56D Rescue,US</span></p>-->
								<ul>
									<!--<li>Free Phone :+1 078 4589 2456</li>
									<li>Telephone :+1 078 4589 2456</li>
									<li>Fax :+1 078 4589 2456</li>-->
									<li><a href="mailto:jose31994@gmail.com">jose31994@gmail.com</a></li>
									<li><a href="mailto:jose3191994@hotmail.com">jose3191994@hotmail.com</a></li>
								</ul>
                                  <p><br>De igual manera es posible contactar mediante las redes sociales que se presentan al inferior de este sitio.</p>
							</div>
							<div class="col-md-8 contact-left cont">
								<h4>Formulario de Contacto</h4>
								<form action="send.php" method="POST">
									<input id="nombre" name="nombre" type="text"  placeholder="*Nombre" required=""/>
									<input id="email" name="email" type="email"  placeholder="*Email" required=""/>
									<input id="telefono" name="telefono" type="text" placeholder="Telefono" />
									<textarea id="mensaje" name="mensaje" type="text" placeholder="*Mensaje" required=""></textarea>
									<input id="submit" name="submit" type="submit" value="Enviar" >
									<input type="reset" value="Limpiar" >

								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
<!-- //contact -->

				</div>
			<!---footer- -->
	<?php
	include_once 'pie.php';
	?>
			<!---footer- -->
			
			
</body>
</html>