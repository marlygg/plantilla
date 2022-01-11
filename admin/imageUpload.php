<?php

session_start();

require('db_config.php');

if(isset($_POST) && !empty($_FILES['imagen']['name']) && !empty($_POST['titulo'])){

	$name = $_FILES['imagen']['name'];
	list($txt, $ext) = explode(".", $name);
	$image_name = $_POST['titulo'].".".$ext;
	$tmp = $_FILES['imagen']['tmp_name'];

	if(move_uploaded_file($tmp, '../assets/img/'.$image_name)){

		$sql = "INSERT INTO galeria (titulo, imagen) VALUES ('".$_POST['titulo']."', '../assets/img/".$image_name."')";
		$mysqli->query($sql);

		$_SESSION['success'] = 'Guardada con Exito.';
		header("Location: editar_galeria.php");
	}else{
		$_SESSION['error'] = 'Error , intenta nuevamente.';
		header("Location: editar_galeria.php");
	}
}else{
	$_SESSION['error'] = 'Por favor , Verifica los campos.';
	header("Location: editar_galeria.php");
}

?>