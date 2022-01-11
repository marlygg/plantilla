<?php
session_start();

header('Content-Type: text/html; charset=utf-8');

include("assets/config/config.php");
include("assets/include/consultas.php");

if ($row = mysqli_fetch_array($result)){
	
?> 

<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $row["titulo"];?>">
    <meta name="author" content="<?php echo $row["autor"];?>">
    <link rel="shortcut icon" href="<?php echo $row["favicon"];?>">

    <title><?php echo $row["titulo"];?></title>

    <!-- CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css.php" rel="stylesheet">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/carousel/carousel.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/fancybox/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/fancybox/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/fancybox/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	
	<!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- JS -->
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack.js?v=2.1.7"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <a href="#myCarousel" class="smoothScroll"> <img width="200" height="50" src="assets/<?php echo $row["logo"];?>"> </a>
    </div>
    <ul class="nav navbar-nav">
			<?php
			   do { 
				  echo "<li><a href='#".$row["menu1"]."' title='#".$row["menu1"]."' class='smoothScroll'>".strtoupper($row["menu1"])."</a></li> \n";
				  echo "<li><a href='#".$row["menu2"]."' title='#".$row["menu2"]."' class='smoothScroll'>".strtoupper($row["menu2"])."</a></li> \n";
				  echo "<li><a href='#".$row["menu3"]."' title='#".$row["menu3"]."' class='smoothScroll'>".strtoupper($row["menu3"])."</a></li> \n";
				  echo "<li><a href='#".$row["menu4"]."' title='#".$row["menu4"]."' class='smoothScroll'>".strtoupper($row["menu4"])."</a></li> \n";
				  echo "<li><a href='#".$row["menu5"]."' title='#".$row["menu5"]."' class='smoothScroll'>".strtoupper($row["menu5"])."</a></li> \n";
				  echo "<li><a href='#".$row["menu6"]."' title='#".$row["menu6"]."' class='smoothScroll'>".strtoupper($row["menu6"])."</a></li> \n";
				  echo "<li><a href='#".$row["menu7"]."' title='#".$row["menu7"]."' class='smoothScroll'>".strtoupper($row["menu7"])."</a></li> \n";
			?>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
        <?php
				$ip_servidor = $row["ip_servidor"];
				$fp = @fsockopen($ip_servidor, 2106, $errno, $errstr, 1);
				if($fp >= 1)
				{
					echo "<li><a href='#'><i class='fa fa-server' aria-hidden='true'></i> LOGIN : <font color = '#81E169'> ONLINE </font> </a></li>";
				}
					else
				{ 
					echo "<li><a href='#'><i class='fa fa-server' aria-hidden='true'></i> LOGIN : <font color = '#DF1313'> OFFLINE </font> </a></li>";
				}

				$fp2 = @fsockopen($ip_servidor, 7777, $errno, $errstr, 1);
				if($fp2 >= 1)
				{
					echo "<li><a href='#'><i class='fa fa-server' aria-hidden='true'></i> SERVER : <font color = '#81E169'> ONLINE </font> </a></li>";
				}
				else
				{
					echo "<li><a href='#'><i class='fa fa-server' aria-hidden='true'></i> SERVER : <font color = '#DF1313'> OFFLINE </font> </a></li>";
				}
		?>
        </ul>
        
  </div>
</nav>
 
  	<br>
  	<br>
  	<br>
  	
		<!-- Carousel
    ================================================== -->
    <div id="myCarousel" name="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="assets/<?php echo $row["carrousel_1"];?>" alt="<?php echo $row["carrousel_1"];?>">
          <div class="container">
            <div class="carousel-caption">
              <h1><font color = "#FED77C"><?php echo $row["titulo_carrousel_1"];?></font></h1>
              <p><?php echo $row["desc_carrousel_1"];?></p>
              <p><a target="_blank" class="btn btn-lg btn-primary" href="<?php echo $row["boton_link_carrousel_1"];?>" role="button"><?php echo $row["boton_carrousel_1"];?></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="assets/<?php echo $row["carrousel_2"];?>" alt="<?php echo $row["carrousel_2"];?>">
          <div class="container">
            <div class="carousel-caption">
              <h1><font color = "#FED77C"><?php echo $row["titulo_carrousel_2"];?></font></h1>
              <p><?php echo $row["desc_carrousel_2"];?></p>
              <p><a target="_blank" class="btn btn-lg btn-primary" href="<?php echo $row["boton_link_carrousel_2"];?>" role="button"><?php echo $row["boton_carrousel_2"];?></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="assets/<?php echo $row["carrousel_3"];?>" alt="<?php echo $row["carrousel_3"];?>">
          <div class="container">
            <div class="carousel-caption">
              <h1><font color = "#FED77C"><?php echo $row["titulo_carrousel_3"];?></font></h1>
              <p><?php echo $row["desc_carrousel_3"];?></p>
              <p><a target="_blank" class="btn btn-lg btn-primary" href="<?php echo $row["boton_link_carrousel_3"];?>" role="button"><?php echo $row["boton_carrousel_3"];?></a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atras</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div><!-- /.carousel -->
		
		<div id="greywrap" name="<?php echo $row["menu1"];?>">
			<div class="row">
				<h1 class="centered"><b><?php echo $row["titulo"];?></b></h1>
				<p><?php echo $row["descripcion_titulo"];?></p>
				<hr>
				<br>
				
				<div class="col-lg-3 callout">
					<span class="fa <?php echo $row["icono_1"];?> fa-5x"></span>
					<h2><?php echo $row["titulo_icono_1"];?></h2>
					<p><?php echo $row["desc_icono_1"];?></p>
				</div>
					
				<div class="col-lg-3 callout">
					<span class="fa <?php echo $row["icono_2"];?> fa-5x"></span>
					<h2><?php echo $row["titulo_icono_2"];?></h2>
					<p><?php echo $row["desc_icono_2"];?></p>
				</div>	
				
				<div class="col-lg-3 callout">
					<span class="fa <?php echo $row["icono_3"];?> fa-5x"></span>
					<h2><?php echo $row["titulo_icono_3"];?></h2>
					<p><?php echo $row["desc_icono_3"];?></p>
				</div>
				
				<div class="col-lg-3 callout">
					<span class="fa <?php echo $row["icono_4"];?> fa-5x"></span>
					<h2><?php echo $row["titulo_icono_4"];?></h2>
					<p><?php echo $row["desc_icono_4"];?></p>
				</div>
				
			</div>
		</div>
		
				<!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider6" name="<?php echo $row["menu2"];?>">
			<div class="container">
				<h1 class="centered"><b>GALERIA</b></h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
	<br/>	
    <div class="row">
    <div class='list-group gallery'>

            <?php
            require('admin/db_config.php');
			
            $sql = "SELECT * FROM galeria";
            $images = $mysqli->query($sql);

            while($image = $images->fetch_assoc()){

            ?>
                <div class='col-sm-3 col-xs-3 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="assets/<?php echo $image['imagen'] ?>">
                        <img class="img-responsive" alt="" src="assets/<?php echo $image['imagen'] ?>" />
                    </a>
                </div> <!-- col-6 / end -->
            <?php } ?>

        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->
		
		<br>
		
		<!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider6">
			<div class="container">
				<h1>¿ Como Jugar <?php echo $row["titulo"];?> ?</h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<br>
		
		<!-- ==== COMO_JUGAR ==== -->
		<div name="<?php echo $row["menu3"];?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sol-sm-12">
					<div>
						<div class="panel-group" id="accordion">
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#descarga_cliente">
						          <b>1. Descargar Cliente</b>
						        </a>
						      </h4>
						    </div>
						    <div id="descarga_cliente">
						      <div class="panel-body">
						        <ul>
						        	<li><strong>Opción 1:</strong> <a target="_blank" href="<?php echo $row["link_cliente_1"];?>"> Torrent</a></li> 
						        	<li><strong>Opción 2:</strong> <a target="_blank" href="<?php echo $row["link_cliente_2"];?>"> Computergames.ro</a></li> 
						        	<li><strong>Opción 3:</strong> <a target="_blank" href="<?php echo $row["link_cliente_3"];?>">Mega</a></li>
						        </ul>
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#guia_instalacion">
						          <b>2. Instalar Parche</b>
						        </a>
						      </h4>
						    </div>
						    <div id="guia_instalacion" >
						      <div class="panel-body">
						      	<h3>Guía de instalación</h3>
								<ol>
									<li>
									Descargar nuestro parche desde cualquiera de las siguientes opciones (solo uno, no es necesario descargar los dos links):
										<ul>
										<li>Para descargarlo mediante <b>Mediafire</b> : <a target="_blank" href="<?php echo $row["link_parche_1"];?>">clic aquí </a>.</li>
										<li>Para descargarlo mediante <b>Mega</b> : <a target="_blank" href="<?php echo $row["link_parche_2"];?>">clic aquí </a>.</li>
										<ul>
										</ul>
									</li>
									<li>
									Busca el archivo descargado, Clic derecho y luego en <strong>Copiar</strong>.
									</li>
									<li>
									Busca el directorio donde tienes instalado tu cliente, que puede ser: 
										<ul>
											<li>Con Windows XP: <b>"C:\Archivos de Programa\Lineage II"</b></li>
											<li>Con Windows 7/8/10 32 bits: <b>"C:\Program Files\Lineage II"</b></li>
											<li>Con Windows 7/8/10 64 bits: <b>"C:\Program Files (x86)\Lineage II"</b></li>
										</ul>
									</li>
									<li>
										<strong>Borra la carpeta System</strong> que tienes creada en ese directorio y <strong>pega el archivo copiado</strong> anteriormente : <br>
									</li>
									<li>
										<strong>Descomprime el Parche </strong> y asegurate de que haya aparecido nuevamente la carpeta con mismo nombre que el de la descarga.
									</li>
									<li>
										Doble clic a la carpeta generada, alli dentro estara la system. Copiamos la carpeta y la pegamos en el directorio raiz.<br>
									</li>
									<h3>Fix W8 y W10</h3>
									<li>Opción 1 <b>Nwindows.dll</b> : <a target="_blank" href="https://www.mediafire.com/?d6lja6g3qwh3fen">clic aquí</a></li>
									<li>Opción 2 <b>dsetup.dll</b> : <a target="_blank" href="https://www.mediafire.com/?yzs5wwiei65igd4">clic aquí</a></li>
								</ol>
								<br>
								Cualquier problema que tengas instalando el parche, te podemos dar soporte desde nuestra fanpage
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- ==== COMO JUGAR -->	
		
		<br>
		
		<!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider6" name="<?php echo $row["menu4"];?>">
			<div class="container">
				<h1>RATES</h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<br>
		
		<div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 sol-sm-12">
					<div>
						<div class="panel-group" id="accordion">
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#descarga_cliente">
						          <b>Detalles de los Rates</b>
						        </a>
						      </h4>
						    </div>
						    <div id="descarga_cliente">
						      <div class="panel-body">
						        <ul>
						        	<li>EXP : x<?php echo $row["detalle_rate_custom_exp"];?></li> 
						        	<li>SP : x<?php echo $row["detalle_rate_custom_sp"];?></li> 
						        	<li>ADENA : x<?php echo $row["detalle_rate_custom_adena"];?></li>
						        	<li>DROP : x<?php echo $row["detalle_rate_custom_drop"];?></li>
						        	<li>START LEVEL : <?php echo $row["detalle_rate_custom_starting_level"];?></li>
						        </ul>
						        <ul>
						        <h3>EXTRAS</h3>
							        <li>OFFLINE SHOP : <?php echo $row["detalle_rate_custom_offline_shop"];?></li>
									<li>AUTOPICKUP : <?php echo $row["detalle_rate_custom_autopickup"];?></li>
									<li>AUTOLEARN SKILL : <?php echo $row["detalle_rate_custom_auto_learn_skills"];?></li>
						        </ul>
						        <ul>
						        <h3>ENCHANTS</h3>
							        <li>SAFE: +<?php echo $row["detalle_rate_custom_safe_enchant"];?></li>
							        <li>MAX : +<?php echo $row["detalle_rate_custom_max_enchant"];?></li>
							        <li>NORMAL ENCHANT : <?php echo $row["detalle_rate_custom_normal_enchant"];?></li>
							        <li>ANCIENT ENCHANT : <?php echo $row["detalle_rate_custom_ancient_enchant"];?></li>
							        <li>DIVINE ENCHANT : <?php echo $row["detalle_rate_custom_divine_enchant"];?></li>
						        </ul>
						        <ul>
						        <h3>NPCS</h3>
							        <li>BUFFER : <?php echo $row["detalle_rate_custom_buffer"];?></li>
									<li>GM SHOP : <?php echo $row["detalle_rate_custom_gmshop"];?></li>
									<li>QUEST : <?php echo $row["detalle_rate_custom_quest"];?></li>
									<li>SUBCLASS : <?php echo $row["detalle_rate_custom_subclass"];?></li>
									<li>NOBLESS : <?php echo $row["detalle_rate_custom_nobles"];?></li>
									<li>SUBCLASS ACUMULATIVA : <?php echo $row["detalle_rate_custom_subclass_acumulativa"];?></li>
						        </ul>
						      </div>
						    </div>
						  </div>
					</div>
				</div>
			</div>
		</div>
		</div>
		
		<!-- ==== SECTION DIVIDER1 -->
		<section class="section-divider textdivider divider1" name="<?php echo $row["menu5"];?>">
			<div class="container">
				<h1>TOP PVP</h1>
				<hr>
			</div>
		</section><!-- section -->
		
		<div class="table-responsive">
		<table class="table">
		<thead>
		  <tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Level</th>
			<th>PVP</th>
		  </tr>
		</thead>
		<?php
			$enlace = mysqli_connect("localhost", "root", "") or die ("could not connect to mysql");
			mysqli_select_db($enlace, "acis");
			$result = mysqli_query($enlace, "SELECT char_name, level, pvpkills FROM characters WHERE pvpkills > 0 AND accesslevel = 0 ORDER BY pvpkills DESC LIMIT 10");
			$i = 1;
			if ($result) {
				while ($char = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $i . ".</td>";
					echo "<td>" . $char['char_name'] . "</td>";
					echo "<td>" . $char['level'] . "</td>";
					echo "<td>" . $char['pvpkills'] . "</td>";
					echo "</tr>";
					$i++;
				}
			}
		?>
		</thead>
		<tbody>
		</table>
		</div>
		
		<br>
			
		<!-- ==== SECTION DIVIDER1 -->
		<section class="section-divider textdivider divider1" name="<?php echo $row["menu5"];?>">
			<div class="container">
				<h1>TOP PK</h1>
				<hr>
			</div>
		</section><!-- section -->
		
		<div class="table-responsive">
		<table class="table">
		<thead>
		  <tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Level</th>
			<th>PK</th>
		  </tr>
		</thead>
		<?php
			$enlace = mysqli_connect("localhost", "root", "") or die ("could not connect to mysql");
			mysqli_select_db($enlace, "acis");
			$result = mysqli_query($enlace, "SELECT char_name, level, pkkills FROM characters WHERE accesslevel = 0 ORDER BY pkkills DESC LIMIT 10");
			$i = 1;
			if ($result) {
				while ($char = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $i . ".</td>";
					echo "<td>" . $char['char_name'] . "</td>";
					echo "<td>" . $char['level'] . "</td>";
					echo "<td>" . $char['pkkills'] . "</td>";
					echo "</tr>";
					$i++;
				}
			}
		?>
		</thead>
		<tbody>
		</table>
		</div>
		
		<br>
		
		<!-- ==== SECTION DIVIDER1 -->
		<section class="section-divider textdivider divider1" name="<?php echo $row["menu5"];?>">
			<div class="container">
				<h1>TOP Hero</h1>
				<hr>
			</div>
		</section><!-- section -->
		
		<div class="table-responsive">
		<table class="table">
		<thead>
		  <tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Level</th>
			<th>PVP</th>
			<th>HERO</th>
		  </tr>
		</thead>
		<?php
			$enlace = mysqli_connect("localhost", "root", "") or die ("could not connect to mysql");
			mysqli_select_db($enlace, "acis");
			$result = mysqli_query($enlace, "SELECT char_name, level, pvpkills, hero FROM characters WHERE accesslevel = 0 AND hero = 1 ORDER BY pvpkills DESC LIMIT 10");
			$i = 1;
			if ($result) {
				while ($char = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $i . ".</td>";
					echo "<td>" . $char['char_name'] . "</td>";
					echo "<td>" . $char['level'] . "</td>";
					echo "<td>" . $char['pvpkills'] . "</td>";
					echo "<td>" . $char['hero'] . "</td>";
					echo "</tr>";
					$i++;
				}
			}
		?>
		</thead>
		<tbody>
		</table>
		</div>
		
		<br>
		
		<!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider3">
			<div class="container">
				<h1>SIEGES</h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<br>
		
		<div class="table-responsive">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Castillo</th>
		        <th>Lider</th>
		        <th>Tax Rate</th>
		        <th>Proximo Asedio</th>
		        <th>Atacantes</th>
		        <th>Defensores</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>1</td>
		        <td>Gludio Castle</td>
		        <td>Overhit</td>
		        <td>18%</td>
		        <td>24/07/2017</td>
		        <td>NewOrder</td>
		        <td>Coronas</td>
		      </tr>
		      <tr>
		        <td>2</td>
		        <td>Dion Castle</td>
		        <td>Overhit</td>
		        <td>18%</td>
		        <td>24/07/2017</td>
		        <td>NewOrder</td>
		        <td>Coronas</td>
		      </tr>
		      <tr>
		        <td>3</td>
		        <td>Giran Castle</td>
		        <td>Overhit</td>
		        <td>18%</td>
		        <td>24/07/2017</td>
		        <td>NewOrder</td>
		        <td>Coronas</td>
		      </tr>
		    </tbody>
		  </table>
		</div>
		
		<br>
		
		<!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider3">
			<div class="container">
				<h1>RAID BOSS</h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<br>
		
		<div class="table-responsive">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Nombre</th>
		        <th>Level</th>
		        <th>Estado</th>
		        <th>Respawn</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>1</td>
		        <th>Valakas</th>
		        <td>85</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		      <tr>
		        <td>2</td>
		        <th>Beleth</th>
		        <td>83</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		      <tr>
		        <td>3</td>
		        <th>Antharas</th>
		        <td>79</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		      <tr>
		        <td>4</td>
		        <th>Baium</th>
		        <td>75</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		      <tr>
		        <td>5</td>
		        <th>Zaken</th>
		        <td>79</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		      <tr>
		        <td>6</td>
		        <th>Orfen</th>
		        <td>50</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		      <tr>
		        <td>7</td>
		        <th>Core</th>
		        <td>50</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		      <tr>
		        <td>8</td>
		        <th>Queen Ant</th>
		        <td>40</td>
		        <td>Vivo</td>
		        <td>Online</td>
		      </tr>
		   </tbody>
		  </table>
		</div>
		
		<br>
		
		<!-- ==== SECTION DIVIDER4 ==== -->
		<section class="section-divider textdivider divider4" name="<?php echo $row["menu6"];?>">
			<div class="container">
				<h1>DONACIONES</h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<br>
		
		<p align="center"><?php echo $row["descripcion_donaciones"];?></p>
		
		<br>
		
		<div class="table-responsive">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Item</th>
		        <th>Cantidad</th>
		        <th>Valor</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>1</td>
		        <td>Vip Coin</td>
		        <td>1</td>
		        <td><a href="<?php echo $row["link_donacion_1"];?>" class="btn btn-info" role="button">$10</a></td>
		      </tr>
		      <tr>
		        <td>2</td>
		        <td>Vip Coin</td>
		        <td>2</td>
		        <td><a href="<?php echo $row["link_donacion_2"];?>" class="btn btn-info" role="button">$20</a></td>
		      </tr>
		    </tbody>
		  </table>
		</div>
		
		<br>

		<!-- ==== SECTION DIVIDER4 ==== -->
		<section class="section-divider textdivider divider4" name="<?php echo $row["menu7"];?>">
			<div class="container">
				<h1>SEGUINOS EN REDES SOCIALES</h1>
				<hr>
			</div><!-- container -->
		</section><!-- section -->
		
		<br>
		<p align="center">
				<div id="fb-div" style="margin: 0 auto; width: 390px;">
				<div class="fb-like-box" data-href="<?php echo $row["facebook"];?>" data-width="292" data-show-faces="true" data-stream="true" data-header="true"></div>
				</div>
				<div id="fb-root"></div>
		</p>
		
		<hr>
		<br>
		
		<center>
		<a href="#myCarousel" class="smoothScroll"><i class="fa fa-arrow-up fa-4x" aria-hidden="true"></i></a><br><br>
		</center>
		
		<div id="footerwrap">
			<div class="container">
				<h4>Derechos Reservados <?php echo $row["autor"];?> | Copyright <?php echo $fecha;?></h4>
			</div>
		</div>

    <!-- Scripts JS -->

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>
	
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=L2Cyrux";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	$(window).bind("load resize", function(){    
	  var container_width = $('#container').width();    
		$('#container').html('<div class="fb-like-box" ' + 
		'data-href="https://www.facebook.com/L2Cyrux/"' +
		' data-width="' + container_width + '" data-height="730" data-show-faces="false" ' +
		'data-stream="true" data-header="true"></div>');
		FB.XFBML.parse( );    
	}); 
	</script>
		
	</body>
</html>

<?php
    }
	while ($row = mysqli_fetch_array($result)); 
	mysqli_close($enlace);
}
?>