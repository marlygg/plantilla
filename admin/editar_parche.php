<?php
include("menu.php");
include_once("config.php");

if(isset($_POST['update']))
{	


	$link_parche_1 = mysqli_real_escape_string($mysqli, $_POST['link_parche_1']);
	$link_parche_2 = mysqli_real_escape_string($mysqli, $_POST['link_parche_2']);
	
	if(empty($link_parche_1) || empty($link_parche_2)) {	
			
		if(empty($link_parche_1)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		
		if(empty($link_parche_2)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
	} else {	
		$result = mysqli_query($mysqli, "UPDATE datos_web SET link_parche_1='$link_parche_1',link_parche_2='$link_parche_2' WHERE ID=1");
		header("Location: index.php");
	}
}
?>
<?php
$id = 1;
$result = mysqli_query($mysqli, "SELECT * FROM datos_web WHERE ID=1");

while($res = mysqli_fetch_array($result))
{
	$link_parche_1 = $res['link_parche_1'];
	$link_parche_2 = $res['link_parche_2'];
}
?>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="titulo">
    <meta name="author" content="autor">
    <link rel="shortcut icon" href="http://l2zafiro.com/img/fav.png">

    <title>Editar Principal</title>

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
	<br/><br/>
	
	<form name="form1" method="post" action="editar_parche.php">
		<table border="0">
			<tr> 
				<td>link_parche_1</td>
				<td><input type="text" name="link_parche_1" value="<?php echo $link_parche_1;?>"></td>
			</tr>
			<tr> 
				<td>link_parche_2</td>
				<td><input type="text" name="link_parche_2" value="<?php echo $link_parche_2;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="1"></td>
				<td><input type="submit" name="update" value="Guardar"></td>
			</tr>
		</table>
	</form>
</body>
</html>