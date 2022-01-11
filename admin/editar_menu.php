<?php
include("menu.php");
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$menu1 = mysqli_real_escape_string($mysqli, $_POST['menu1']);
	$menu2 = mysqli_real_escape_string($mysqli, $_POST['menu2']);
	$menu3 = mysqli_real_escape_string($mysqli, $_POST['menu3']);	
	$menu4 = mysqli_real_escape_string($mysqli, $_POST['menu4']);
	$menu5 = mysqli_real_escape_string($mysqli, $_POST['menu5']);
	$menu6 = mysqli_real_escape_string($mysqli, $_POST['menu6']);	
	$menu7 = mysqli_real_escape_string($mysqli, $_POST['menu7']);	
	
	if(empty($menu1) || empty($menu2) || empty($menu3) || empty($menu4) || empty($menu5) || empty($menu6) || empty($menu7)) {	
			
		if(empty($menu1)) {
			echo "<font color='red'>menu1 field is empty.</font><br/>";
		}
		
		if(empty($menu2)) {
			echo "<font color='red'>menu2 field is empty.</font><br/>";
		}
		if(empty($menu3)) {
					echo "<font color='red'>menu3 field is empty.</font><br/>";
		}
		if(empty($menu4)) {
					echo "<font color='red'>menu4 field is empty.</font><br/>";
		}
		if(empty($menu5)) {
					echo "<font color='red'>menu5 field is empty.</font><br/>";
		}
		if(empty($menu6)) {
					echo "<font color='red'>menu6 field is empty.</font><br/>";
		}
		if(empty($menu7)) {
					echo "<font color='red'>menu7 field is empty.</font><br/>";
		}		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE datos_web SET menu1='$menu1',menu2='$menu2',menu3='$menu3',menu4='$menu4',menu5='$menu5',menu6='$menu6',menu7='$menu7' WHERE id=1");
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM datos_web WHERE id=1");

while($res = mysqli_fetch_array($result))
{
	$menu1 = $res['menu1'];
	$menu2 = $res['menu2'];
	$menu3 = $res['menu3'];
	$menu4 = $res['menu4'];
	$menu5 = $res['menu5'];
	$menu6 = $res['menu6'];
	$menu7 = $res['menu7'];
}
?>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="titulo">
    <meta name="author" content="autor">
    <link rel="shortcut icon" href="http://l2zafiro.com/img/fav.png">

    <title>Editar Menu</title>

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
	
	<h3>Menu</h3>
	<form name="form1" method="post" action="editar_menu.php">
		<table border="0">
			<tr> 
				<td>menu1</td>
				<td><input type="text" name="menu1" value="<?php echo $menu1;?>"></td>
			</tr>
			<tr> 
				<td>menu2</td>
				<td><input type="text" name="menu2" value="<?php echo $menu2;?>"></td>
			</tr>
			<tr> 
				<td>menu3</td>
				<td><input type="text" name="menu3" value="<?php echo $menu3;?>"></td>
			</tr>
			<tr> 
				<td>menu4</td>
				<td><input type="text" name="menu4" value="<?php echo $menu4;?>"></td>
			</tr>
			<tr> 
				<td>menu5</td>
				<td><input type="text" name="menu5" value="<?php echo $menu5;?>"></td>
			</tr>
			<tr> 
				<td>menu6</td>
				<td><input type="text" name="menu6" value="<?php echo $menu6;?>"></td>
			</tr>
			<tr> 
				<td>menu7</td>
				<td><input type="text" name="menu7" value="<?php echo $menu7;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="1"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>