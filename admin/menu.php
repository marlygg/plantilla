<!DOCTYPE html>
<html lang="en">
<head>
  <title>Panel de Control</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Panel de Control</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
	  <li><a href="ver_menu.php"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a></li>
	  <li><a href="ver_principal.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Principal</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Carrousel <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="ver_carrousel1.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Carrousel 1</a></li>
          <li><a href="ver_carrousel2.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Carrousel 2</a></li>
          <li><a href="ver_carrousel3.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Carrousel 3</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Informacion <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="ver_informacion1.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Informacion 1</a></li>
          <li><a href="ver_informacion2.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Informacion 2</a></li>
          <li><a href="ver_informacion3.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Informacion 3</a></li>
		  <li><a href="ver_informacion4.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Informacion 4</a></li>
        </ul>
      </li>
	  <li><a href="editar_galeria.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Galeria</a></li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Cliente <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="ver_cliente.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Descargar Cliente</a></li>
		   <li><a href="ver_parche.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Descargar Parche</a></li>
        </ul>
      </li>
	  <li><a href="ver_donaciones.php"><i class="fa fa-credit-card" aria-hidden="true"></i> Donaciones</a></li>
    </ul>
    <!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
    </ul>-->
  </div>
</nav>