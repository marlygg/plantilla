<?php
include("menu.php");
include_once("config.php");

if(isset($_POST['update']))
{	


	$favicon = mysqli_real_escape_string($mysqli, $_POST['favicon']);
	$logo = mysqli_real_escape_string($mysqli, $_POST['logo']);
	$autor = mysqli_real_escape_string($mysqli, $_POST['autor']);
	$logo_menu = mysqli_real_escape_string($mysqli, $_POST['logo_menu']);
	$facebook = mysqli_real_escape_string($mysqli, $_POST['facebook']);
	$ip_servidor = mysqli_real_escape_string($mysqli, $_POST['ip_servidor']);
	
	if(empty($favicon) || empty($logo) ||empty($autor) || empty($facebook) || empty($ip_servidor)) {	
			
		if(empty($favicon)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		
		if(empty($logo)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($autor)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($facebook)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($ip_servidor)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
	} else {	
		$result = mysqli_query($mysqli, "UPDATE datos_web SET favicon='$favicon',logo='$logo',autor='$autor',facebook='$facebook',ip_servidor='$ip_servidor' WHERE id=1");
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM datos_web WHERE id=1");

while($res = mysqli_fetch_array($result))
{
	$favicon = $res['favicon'];
	$logo = $res['logo'];
	$autor = $res['autor'];
	$facebook = $res['facebook'];
	$ip_servidor = $res['ip_servidor'];
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
	
	<form name="form1" method="post" action="editar_principal.php">
		<table border="0">
			<tr> 
				<td>favicon</td>
				<td><input type="text" name="favicon" value="<?php echo $favicon;?>"></td>
			</tr>
			<tr> 
				<td>logo</td>
				<td><input type="text" name="logo" value="<?php echo $logo;?>"></td>
			</tr>
			<tr> 
				<td>autor</td>
				<td><input type="text" name="autor" value="<?php echo $autor;?>"></td>
			</tr>
			<tr> 
				<td>Facebook</td>
				<td><input type="text" name="facebook" value="<?php echo $facebook;?>"></td>
			</tr>
			<tr> 
				<td>IP Servidor</td>
				<td><input type="text" name="ip_servidor" value="<?php echo $ip_servidor;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="1"></td>
				<td><input type="submit" name="update" value="Guardar"></td>
			</tr>
		</table>
	</form>
</body>
</html>