<?php
include("menu.php");
include_once("config.php");

if(isset($_POST['update']))
{	


	$carrousel_2 = mysqli_real_escape_string($mysqli, $_POST['carrousel_2']);
	$titulo_carrousel_2 = mysqli_real_escape_string($mysqli, $_POST['titulo_carrousel_2']);
	$desc_carrousel_2 = mysqli_real_escape_string($mysqli, $_POST['desc_carrousel_2']);	
	$boton_carrousel_2 = mysqli_real_escape_string($mysqli, $_POST['boton_carrousel_2']);
	$boton_link_carrousel_2 = mysqli_real_escape_string($mysqli, $_POST['boton_link_carrousel_2']);
	
	if(empty($carrousel_2) || empty($titulo_carrousel_2) || empty($desc_carrousel_2) || empty($boton_carrousel_2) || empty($boton_link_carrousel_2)) {	
			
		if(empty($carrousel_2)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		
		if(empty($titulo_carrousel_2)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($desc_carrousel_2)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($boton_carrousel_2)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($boton_link_carrousel_2)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
	} else {	
		$result = mysqli_query($mysqli, "UPDATE datos_web SET carrousel_2='$carrousel_2',titulo_carrousel_2='$titulo_carrousel_2',desc_carrousel_2='$desc_carrousel_2',boton_carrousel_2='$boton_carrousel_2',boton_link_carrousel_2='$boton_link_carrousel_2' WHERE id=1");
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM datos_web WHERE id=1");

while($res = mysqli_fetch_array($result))
{
	$carrousel_2 = $res['carrousel_2'];
	$titulo_carrousel_2 = $res['titulo_carrousel_2'];
	$desc_carrousel_2 = $res['desc_carrousel_2'];
	$boton_carrousel_2 = $res['boton_carrousel_2'];
	$boton_link_carrousel_2 = $res['boton_link_carrousel_2'];
}
?>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="titulo">
    <meta name="author" content="autor">
    <link rel="shortcut icon" href="http://l2zafiro.com/img/fav.png">

    <title>Editar Carrousel 1</title>

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
	<a href="index.php">Inicio</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editar_carrousel2.php">
		<table border="0">
			<tr> 
				<td>carrousel_2</td>
				<td><input type="text" name="carrousel_2" value="<?php echo $carrousel_2;?>"></td>
			</tr>
			<tr> 
				<td>titulo_carrousel_2</td>
				<td><input type="text" name="titulo_carrousel_2" value="<?php echo $titulo_carrousel_2;?>"></td>
			</tr>
			<tr> 
				<td>desc_carrousel_2</td>
				<td><input type="text" name="desc_carrousel_2" value="<?php echo $desc_carrousel_2;?>"></td>
			</tr>
			<tr> 
				<td>boton_carrousel_2</td>
				<td><input type="text" name="boton_carrousel_2" value="<?php echo $boton_carrousel_2;?>"></td>
			</tr>
			<tr> 
				<td>boton_link_carrousel_2</td>
				<td><input type="text" name="boton_link_carrousel_2" value="<?php echo $boton_link_carrousel_2;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="1"></td>
				<td><input type="submit" name="update" value="Guardar"></td>
			</tr>
		</table>
	</form>
</body>
</html>