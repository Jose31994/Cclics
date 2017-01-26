<!--
Author: Jose Alberto Noh Noh
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Obtener</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/favicon.png" type="image/png" />	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					
					function instrucciones()
					{
						document.getElementById('enviar2').style.display = 'none';
						$('#obtain').fadeIn("slow");
					}
				</script>
<!--script-->
</head>
<body oncopy="return false"  oncontextmenu="return false">
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
								<h1><a href="default">CAPTCHA Clic's</a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="default">Inicio <i class="sr-only">(current)</i></a></li>
								<li><a href="about">Acerca de</a></li>
								<li><a href="support">Soporte</a></li>

								<li><a href="contact">Contacto</a></li>
							</ul>

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header- -->

         <?php
            function contador()
            {
                $archivo = "contador.txt"; //el archivo que contiene en numero
                $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
                if($f)
                {
                    $contador = fread($f, filesize($archivo)); //leemos el archivo
                    $contador = $contador + 1; //sumamos +1 al contador
                    fclose($f);
                }
                $f = fopen($archivo, "w+");
                if($f)
                {
                    fwrite($f, $contador);
                    fclose($f);
                }
                return $contador;
            }
        ?>

		<!---singleblog- -->
				<div class="content">
					<div class="blog">
						<div class="container">
							<h2>Obtener</h2>
							<div class="blog-grids">

								<div class="col-md-11 blog-grid1" >

									<form style="text-align: center;" method="get" action="javascript:instrucciones()">

										<?php
										include_once("Clics.php");
										//include 'http://goo.gl/KzlOry';
										?>

									</form>
                                        <?php $active_users = contador();  ?>
									<ul class="blog-ic">
										<li><a href="http://www.fb.com/Jose191994"><span><i  class="glyphicon glyphicon-user"> </i>Jose Alberto Noh</span> </a> </li>
										<li><span><i class="glyphicon glyphicon-calendar"> </i><?php echo   date("F") ." ". date("d") . " , " . date("Y");  ?></span></li>
										<li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:<?php echo $active_users; ?> </span></li>
										<li><a href="http://www.revistatecnologiadigital.com/pdf/05_008_metodo_grafico_validacion_identidad_humana_web.pdf"><span><i class="glyphicon glyphicon-bookmark"> </i> Artículo del método (Rev. Tecnología Digital)</span></a></li>
										<li><a href="http://www.iarjset.com/upload/2016/november-16/IARJSET%2011.pdf"><span><i class="glyphicon glyphicon-bookmark"> </i> Artículo del método (Rev. IARJSET)</span></a></li>
                                        <li><a href="http://www.tizimin.uady.mx/archivos/publicaciones/RevistaInforFMATeNo11.pdf"><span><i class="glyphicon glyphicon-bookmark"> </i> Artículo del método (Rev. InforFMATe)</span></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>

							<br>
							<br>

							<!-- Instrucciones -->
							<div id="obtain" style="display: none">

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Inicialmente</a></li>
									<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Seguidamente</a></li>
									<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Finalmente</a></li>
									<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Apoya el proyecto</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="home">
										<div class="col-md-11 client-grid">

											Es necesario para el correcto funcionamiento del método de un formulario con sus atributos definidos, ninguna opción submit, este método
											proporciona lo necesario la re-dirección o comprobación del método.
											<br><br>
											NOTA: El método es desarrollado en PHP7 y HTML5, compatible con navegadores FIREFOX, CHROME, OPERA, SAFARI; en sus versiones actuales para PC y Móvil.

											<br><br><br><br>

											A continuación se presentan las estructuras de formularios más comunes:
											<br><br>

										</div>


										<div class="col-md-9 client-grid">
											Estructura básica de un formulario,usando el método action el cual contendrá las acciones a realizar al presionar el botón del método CAPTCHA.
											<figure class="highlight"><pre><code class="language-html" data-lang="html">
														<span class="cp">< Form action="</span><span class="s"> Url o acción </span><span class="cp"> " >  </span>
														<span class="cp">< input type="</span><span class="s"> tipo </span><span class="cp"> "  ...  >  </span>

														<br>...<br>
														<br>....<br>

														<span class="cp"> < /Form > </span></code><br><br></pre></figure>

										</div>



										<div class="col-md-9 client-grid">
											Estructura basica de un formulario,usando el método submit el cual contendra las acciones a realizar al presionar el botón del método CAPTCHA.
											<figure class="highlight"><pre><code class="language-html" data-lang="html">
														<span class="cp">< Form submit="</span><span class="s"> Url o acción </span><span class="cp"> " >  </span>
														<span class="cp">< input type="</span><span class="s"> tipo </span><span class="cp"> "  ...  >  </span>

														<br>...<br>
														<br>....<br>

														<span class="cp"> < /Form > </span></code><br><br></pre></figure>

										</div>


									</div>
									<div role="tabpanel" class="tab-pane" id="profile">


										<div class="col-md-11 client-grid">

											Ahora al final de tu formulario coloca una sentencia include, con la dirección URL: http://goo.gl/KzlOry.
											<br><br>
											NOTA: Para el uso de la función include, es necesario usar etiquetas PHP, para poder usarlas es necesario que el archivo web cuente con extensión .php

											<br>
											<br>
											A continuación se ejemplifica lo anterior.

										</div>


										<div class="col-md-9 client-grid">
											Estructura básica de un formulario, incrustado el método CAPTCHA.
											<figure class="highlight"><pre><code class="language-html" data-lang="html">
														<span class="cp">< Form action="</span><span class="s"> Url o acción </span><span class="cp"> " >  </span>
														<span class="cp">< input type="</span><span class="s"> tipo </span><span class="cp"> "  ...  >  </span>

														<br>...<br>

														<span class="cp"> &lt;?php </span>
														<span class="cp"> include '</span><span class="s"> http://goo.gl/KzlOry </span><span class="cp">';</span>
															<span class="cp"> ?> </span>

														<span class="cp"> < /Form > </span></code><br><br></pre></figure>
										</div>

									</div>
									<div role="tabpanel" class="tab-pane" id="messages">

										<div class="col-md-11 client-grid">

											Ahora puede disfrutar del método en la cantidad de formularios que desee, el método ira teniendo mejoras con base a las pruebas de usuarios, se recomienda usar en aquellos servicios básicos que
											se deseen proteger evitando el spam y solicitudes múltiples.

											<br><br>
											SUGERENCIA: El método ha sido desarrollado y alojado en un servidor con funciones en PHP7, por lo que para una mejor experiencia
											se recomienda que el sitio en el se desee usar el método sea basado en PHP7 o en su caso el servidor de alojamiento soporte la versión 7 de PHP.

										</div>


									</div>
									<div role="tabpanel" class="tab-pane" id="settings">
										<div class="col-md-11 client-grid">
											Apoya este proyecto, puede apoyar de varias formas:

											<br><br>

											1.- Participa en la web de pruebas en esta se comparan este método junto con otro tradicional, accede a <a href="http://www.pruebacaptcha.esy.es">www.pruebacaptcha.esy.es</a> , para
											participar, ahí podrás dar los comentarios respecto a la complejidad de resolución entre otros datos para mejorar este método.

											<br><br>

											2.- Puede mandar tus opiniones o sugerencia en la sección <a href="contact.php">contacto</a> de esta web.

											<br><br>

											3.- Comparte esta web en tus redes sociales, para hacerla crecer, o simplemente obsequia un Like.


										</div>

									</div>
								</div>

							</div>
							<!--Fin instrucciones-->

						</div>
					</div>


					<br>
					<br>
					<br>


			<!---footer- -->
<?php
include_once("pie.php");
?>
			<!---footer- -->

</body>
</html>