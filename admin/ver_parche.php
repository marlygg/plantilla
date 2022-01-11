<?php
include("menu.php");
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM datos_web where ID=1");
?>

<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="titulo">
    <meta name="author" content="autor">
    <link rel="shortcut icon" href="http://l2zafiro.com/img/fav.png">

    <!-- CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css.php" rel="stylesheet">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/carousel/carousel.css" rel="stylesheet">  
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	
	<!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<table class="table table-bordered">
	<thead>
	<tr>
		<td>Link Parche 1</td>
		<td>Link Parche 2</td>
	</tr>
	</thead>
	<tbody>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['link_parche_1']."</td>";
		echo "<td>".$res['link_parche_2']."</td>";
		echo "<td><a href=\"editar_parche.php?id=1\">Editar</a></td>";		
	}
	?>
	</tbody>
	</table>
</body>
</html>