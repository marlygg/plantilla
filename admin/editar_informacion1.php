<?php
include("menu.php");
include_once("config.php");

if(isset($_POST['update']))
{	


	$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);
	$descripcion_titulo = mysqli_real_escape_string($mysqli, $_POST['descripcion_titulo']);
	$icono_1 = mysqli_real_escape_string($mysqli, $_POST['icono_1']);	
	$titulo_icono_1 = mysqli_real_escape_string($mysqli, $_POST['titulo_icono_1']);
	$desc_icono_1 = mysqli_real_escape_string($mysqli, $_POST['desc_icono_1']);
	
	if(empty($titulo) || empty($descripcion_titulo) || empty($icono_1) || empty($titulo_icono_1) || empty($desc_icono_1)) {	
			
		if(empty($titulo)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		
		if(empty($descripcion_titulo)) {
			echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($icono_1)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($titulo_icono_1)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
		if(empty($desc_icono_1)) {
					echo "<font color='red'>Campo Vacio.</font><br/>";
		}
	} else {	
		$result = mysqli_query($mysqli, "UPDATE datos_web SET titulo='$titulo',descripcion_titulo='$descripcion_titulo',icono_1='$icono_1',titulo_icono_1='$titulo_icono_1',desc_icono_1='$desc_icono_1' WHERE id=1");
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM datos_web WHERE id=1");

while($res = mysqli_fetch_array($result))
{
	$titulo = $res['titulo'];
	$descripcion_titulo = $res['descripcion_titulo'];
	$icono_1 = $res['icono_1'];
	$titulo_icono_1 = $res['titulo_icono_1'];
	$desc_icono_1 = $res['desc_icono_1'];
}
?>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="titulo">
    <meta name="author" content="autor">
    <link rel="shortcut icon" href="http://l2zafiro.com/img/fav.png">

    <title>Editar Informacion</title>

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
	
	<h3>Recorda que los iconos deben utilizarse de la <a href="http://fontawesome.io/icons/">siguiente web</a>.</h3>
	
	<br/>
	
	<form name="form1" method="post" action="editar_informacion1.php">
		<table border="0">
			<tr> 
				<td>Titulo</td>
				<td><input type="text" name="titulo" value="<?php echo $titulo;?>"></td>
			</tr>
			<tr> 
				<td>Descripcion Titulo</td>
				<td><input type="text" name="descripcion_titulo" value="<?php echo $descripcion_titulo;?>"></td>
			</tr>
			<tr> 
				<td>Icono_1</td>
				<td><input type="text" name="icono_1" value="<?php echo $icono_1;?>"></td>
			</tr>
			<tr> 
				<td>Titulo Icono 1</td>
				<td><input type="text" name="titulo_icono_1" value="<?php echo $titulo_icono_1;?>"></td>
			</tr>
			<tr> 
				<td>Desc Icono 1</td>
				<td><input type="text" name="desc_icono_1" value="<?php echo $desc_icono_1;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="1"></td>
				<td><input type="submit" name="update" value="Guardar"></td>
			</tr>
		</table>
	</form>
</body>
</html>